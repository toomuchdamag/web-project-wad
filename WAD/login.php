<?php
session_start(); // Start session at the top

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $pwd = trim($_POST['pwd']);

    try {
        require_once 'DConnect.php';       // Database connection file
        require_once 'loginmodel.php';     // Contains the model functions
        require_once 'logincontroller.php';// Contains controller logic

        // ERROR HANDLERS
        $errors = [];

        // Check if fields are empty
        if (is_input_empty($username, $pwd)) {
            $errors['empty_input'] = "Please fill in all fields.";
        }

        // Fetch user details based on the username
        $result = get_user($pdo, $username);

        // Check if username exists
        if (is_username_wrong($result)) {
            $errors['username_wrong'] = "Username does not exist.";
        }

        // Check if password matches (using password_verify for hashed password)
        if (!is_username_wrong($result) && !password_verify($pwd, $result['pwd'])) {
            $errors['password_wrong'] = "Password is incorrect.";
        }

        // Handle errors by redirecting with error messages
        if ($errors) {
            $_SESSION["errors_login"] = $errors;
            header('Location: admin.php'); // Redirect to login page with errors
            exit(); // Stop script execution after redirect
        }

        // Start session and generate a unique session ID for the user
        require_once 'configsession.php'; // Initialize session

        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $result["id"];
        session_id($sessionId); // Set a custom session ID

        // Start the session
        session_start();

        // Store user data in session variables
        $_SESSION['user_id'] = $result['id'];
        $_SESSION['user_username'] = htmlspecialchars($result['username']);
        $_SESSION['last_regeneration'] = time(); // Store timestamp of last session regeneration

        // Regenerate session ID to prevent session fixation
        session_regenerate_id();

        // Redirect to the admin dashboard after successful login
        header('Location: admindashboard.html?login=success');
        exit(); // Stop script execution after redirect

    } catch (PDOException $e) {
        // Handle any database connection or query errors
        die("Query failed: " . $e->getMessage());
    }
} else {
    // Redirect to the index page if the request method is not POST
    header('Location: index.html');
    exit();
}
?>
