<?php
// Include database connection
include 'DConnect.php'; // Ensure this file contains your DB connection setup with PDO

// Get the raw POST data (JSON)
$data = json_decode(file_get_contents('php://input'), true);

// Check if the required data is present
if (isset($data['id']) && isset($data['PGPName']) && isset($data['year1block1']) && isset($data['year1block2']) && isset($data['year1block3']) && isset($data['year1block4']) && isset($data['year1block5'])) {

    try {
        // Prepare the database connection using PDO
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Sanitize inputs (PDO automatically takes care of SQL injection prevention when using prepared statements)
        $id = $data['id'];
        $PGPName = $data['PGPName'];
        $year1block1 = $data['year1block1'];
        $year1block2 = $data['year1block2'];
        $year1block3 = $data['year1block3'];
        $year1block4 = $data['year1block4'];
        $year1block5 = $data['year1block5'];

        // SQL query to update the programme
        $query = "UPDATE pgprogrammedata SET PGPName = :PGPName, year1block1 = :year1block1, year1block2 = :year1block2, year1block3 = :year1block3, year1block4 = :year1block4, year1block5 = :year1block5 WHERE id = :id";

        // Prepare the statement
        $stmt = $conn->prepare($query);

        // Bind the parameters
        $stmt->bindParam(':PGPName', $PGPName, PDO::PARAM_STR);
        $stmt->bindParam(':year1block1', $year1block1, PDO::PARAM_STR);
        $stmt->bindParam(':year1block2', $year1block2, PDO::PARAM_STR);
        $stmt->bindParam(':year1block3', $year1block3, PDO::PARAM_STR);
        $stmt->bindParam(':year1block4', $year1block4, PDO::PARAM_STR);
        $stmt->bindParam(':year1block5', $year1block5, PDO::PARAM_STR);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        // Execute the statement
        if ($stmt->execute()) {
            // Return success response
            echo json_encode(['success' => true, 'message' => 'Programme updated successfully!']);
        } else {
            // Return error if the update fails
            echo json_encode(['success' => false, 'message' => 'Error updating programme.']);
        }

    } catch (PDOException $e) {
        // Return error if there is a problem with the database connection or query
        echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
    }

} else {
    // Return error if required data is missing
    echo json_encode(['success' => false, 'message' => 'Invalid data received']);
}
?>
