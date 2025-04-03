<?php
// delete_user.php


try {
    require_once "DConnect.php";  // Include your database connection file
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the 'id' parameter is provided
    if (isset($_GET['id'])) {
        $userId = $_GET['id'];

        // Prepare the SQL statement to delete the user based on the ID
        $stmt = $pdo->prepare("DELETE FROM studentdata WHERE id = :id");
        
        // Bind the ID parameter to the prepared statement
        $stmt->bindParam(':id', $userId, PDO::PARAM_INT);
        
        // Execute the statement
        $stmt->execute();

        // Check if any row was deleted
        if ($stmt->rowCount() > 0) {
            echo json_encode(["success" => true]);
        } else {
            echo json_encode(["success" => false, "message" => "User not found"]);
        }
    } else {
        echo json_encode(["success" => false, "message" => "No user ID provided"]);
    }

} catch (PDOException $e) {
    // If there's an error with the database connection or query, catch the exception
    echo json_encode(["success" => false, "message" => "Database error: " . $e->getMessage()]);
}
?>
