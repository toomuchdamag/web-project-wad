<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $name = trim($_POST['name']);
    $visitor_email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);
    
    // Validate the required fields
    if (empty($name) || empty($visitor_email) || empty($subject) || empty($message)) {
        die("All fields are required.");
    }

    // Validate the email address format
    if (!filter_var($visitor_email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    // Database connection (ensure DConnect.php exists and is configured correctly)
    try {
        require_once "DConnect.php";  // Include your database connection file

        // Check if the email already exists in the database
        $stmt = $pdo->prepare("SELECT * FROM studentdata WHERE email = :email");
        $stmt->execute(['email' => $visitor_email]);

        if ($stmt->fetch()) {
            die("This email is already registered, Thankyou for your interest in DMU Dubai.");
        }

        // SQL query to insert data into the table
        $query = "INSERT INTO studentdata (`studentname`, `email`, `course`, `message`) VALUES (?, ?, ?, ?);";

        // Prepare the statement
        $stmt = $pdo->prepare($query);

        // Execute the query with actual values
        $stmt->execute([$name, $visitor_email, $subject, $message]);


        // Send a confirmation email to the student
        $email_subject_student = 'Thank You for Your Submission';
        $email_body_student = "Dear $name,\n\n".
                              "Thank you for reaching out to DMU Dubai. We have received the following details:\n\n".
                              "Subject: $subject\n".
                              "Your Message: $message\n\n".
                              "We will get back to you shortly.\n\n".
                              "Best regards,\nDMU Dubai Team";

        $to_student = $visitor_email;
       

        // Send the email to the student
        if (!mail($to_student, $email_subject_student, $email_body_student)) {
            die("Error sending confirmation email to student.");
        }

        // Redirect after success
        header("Location: ../WAD/Course.html");
        exit();

    } catch (PDOException $e) {
        // In case of error, display the error message
        die("Query Failed: " . $e->getMessage());
    }

} else {
    // If the request is not POST, redirect to the Course page
    header("Location: ../WAD/Index.html");
    exit();
}

?>
