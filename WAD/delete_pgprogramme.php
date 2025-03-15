<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Set content type to JSON for proper response
header('Content-Type: application/json');

// Check if the 'id' parameter is provided
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];  // Using ID as the unique identifier

    try {
        require_once "DConnect.php";  // Include your database connection file

        // Prepare the SQL query to delete the programme by ID
        $sql = "DELETE FROM pgprogrammedata WHERE id = :id";  // Use ID for the delete query

        // Prepare the statement
        $stmt = $pdo->prepare($sql);

        // Bind the ID parameter to the statement
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        // Execute the statement
        if ($stmt->execute()) {
            echo json_encode(["success" => true, "message" => "Programme deleted successfully"]);
        } else {
            echo json_encode(["success" => false, "message" => "Error deleting programme"]);
        }

    } catch (PDOException $e) {
        // Catch and return any errors
        echo json_encode(["success" => false, "message" => "Error: " . $e->getMessage()]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Missing required ID"]);
}
?>
