<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

   try {
    require_once 'DConnect.php';
    require_once 'loginmodel.php';
    require_once 'logincontroller.php';

    //ERROR HANDLERS

    $errors = [];

    if (is_input_empty($username, $pwd)) {
        $errors['empty_input'] = "Please fill in all fields";
    }

    $result = get_user($pdo, $username);

    if (is_username_wrong($result)) {
        $errors['username_wrong'] = "Username or password is incorrect";
    }

    if (!is_username_wrong($result) && is_password_wrong($pwd,$result['pwd'])) {
        $errors['username_wrong'] = "Username or password is incorrect";
    }


    require_once 'configsession.php';

    if ($errors) {
        $_SESSION["errors_login"] = $errors;

       

        header('Location: login.php');
        die();
    }

    $newSessionId = session_create_id();
    $sessionId = $newSessionId . "_" . $result["id"];
    session_id($sessionId);
   
    $_SESSION['user_id'] = $result['id'];
    $_SESSION['user_username'] = htmlspecialchars($result['username']);
   
    $_SESSION['last_regeneration'] = time();

    header('Location: index.php');
    $pdo = null;
    $statement = null;

    die();
} catch (PDOException $e) {
      die("Query failed: " . $e->getMessage());
   }
}else {
    header('Location: login.php');
    die();
}     