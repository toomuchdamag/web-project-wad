<?php

require_once "DConnect.php";  // Include the database connection file

// Check if the connection is established
if (!$pdo) {
    echo "Failed to connect to the database.";
    die();
}

// Example password to store
$password = 'admin123';  // Plaintext password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);  // Hash it

// Insert the admin user into the database
$sql = "INSERT INTO admins (username, pwd) VALUES (:username, :pwd)";
$stmt = $pdo->prepare($sql);

// Bind the values using bindValue instead of bindParam
$stmt->bindValue(':username', 'admin', PDO::PARAM_STR);  // Use bindValue instead of bindParam
$stmt->bindValue(':pwd', $hashed_password, PDO::PARAM_STR);  // Use bindValue for the hashed password

$stmt->execute();

?>
