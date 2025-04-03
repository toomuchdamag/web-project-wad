<?php
// Include database connection
include 'DConnect.php'; // Ensure this file contains your DB connection setup with PDO

// Get the raw POST data (JSON)
$data = json_decode(file_get_contents('php://input'), true);

// Check if the required data is present
if (isset($data['id']) && isset($data['UGPName']) && isset($data['year1block1']) && isset($data['year1block2']) && isset($data['year1block3']) && isset($data['year1block4']) && isset($data['year2block1']) && isset($data['year2block2']) && isset($data['year2block3']) && isset($data['year2block4'])&& isset($data['year3block1']) && isset($data['year3block2']) && isset($data['year3block3']) && isset($data['year3block4']) ) {

    try {
        // Prepare the database connection using PDO
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Sanitize inputs (PDO automatically takes care of SQL injection prevention when using prepared statements)
        $id = $data['id'];
        $UGPName = $data['UGPName'];
        $year1block1 = $data['year1block1'];
        $year1block2 = $data['year1block2'];
        $year1block3 = $data['year1block3'];
        $year1block4 = $data['year1block4'];
        $year2block1 = $data['year2block1'];
        $year2block2 = $data['year2block2'];
        $year2block3 = $data['year2block3'];
        $year2block4 = $data['year2block4'];
        $year3block1 = $data['year3block1'];
        $year3block2 = $data['year3block2'];
        $year3block3 = $data['year3block3'];
        $year3block4 = $data['year3block4'];
        

        // SQL query to update the programme
        $query = "UPDATE ugprogrammedata SET UGPName = :UGPName, year1block1 = :year1block1, year1block2 = :year1block2, year1block3 = :year1block3, year1block4 = :year1block4, year2block1 = :year2block1, year2block2 = :year2block2, year2block3 = :year2block3, year2block4 = :year2block4, year3block1 = :year3block1, year3block2 = :year3block2, year3block3 = :year3block3, year3block4 = :year3block4 WHERE id = :id";

        // Prepare the statement
        $stmt = $conn->prepare($query);

        // Bind the parameters
        $stmt->bindParam(':UGPName', $UGPName, PDO::PARAM_STR);
        $stmt->bindParam(':year1block1', $year1block1, PDO::PARAM_STR);
        $stmt->bindParam(':year1block2', $year1block2, PDO::PARAM_STR);
        $stmt->bindParam(':year1block3', $year1block3, PDO::PARAM_STR);
        $stmt->bindParam(':year1block4', $year1block4, PDO::PARAM_STR);
        $stmt->bindParam(':year2block1', $year2block1, PDO::PARAM_STR);
        $stmt->bindParam(':year2block2', $year2block2, PDO::PARAM_STR);
        $stmt->bindParam(':year2block3', $year2block3, PDO::PARAM_STR);
        $stmt->bindParam(':year2block4', $year2block4, PDO::PARAM_STR);
        $stmt->bindParam(':year3block1', $year3block1, PDO::PARAM_STR);
        $stmt->bindParam(':year3block2', $year3block2, PDO::PARAM_STR);
        $stmt->bindParam(':year3block3', $year3block3, PDO::PARAM_STR);
        $stmt->bindParam(':year3block4', $year3block4, PDO::PARAM_STR);
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
