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

    try {
        require_once "DConnect.php";  // Include your database connection file

        // SQL query to insert data into the table
        $query = "INSERT INTO studentdata (`studentname`, `email`, `course`, `message`) VALUES (?, ?, ?, ?);";

        // Prepare the statement
        $stmt = $pdo->prepare($query);

        // Execute the query with actual values
        $stmt->execute([$name, $visitor_email, $subject, $message]);

        // Close the connection and statement (optional, as PHP will clean up resources)
        $stmt = null;

        // Redirect to the desired page after successful insertion
        header("Location: ../WAD/Course.html");
        exit();
    } catch (PDOException $e) {
        // In case of error, display the error message
        die("Query Failed: " . $e->getMessage());
    }
} else {
    // If the request is not POST, redirect to the Course page
    header("Location: ../WAD/Course.html");
    exit();
}
?>
