<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate inputs (basic example, you may need more specific validation)
    $PGPName = isset($_POST['PGPName']) ? trim($_POST['PGPName']) : '';  // Ensure variable name matches form field
    $year1block1 = isset($_POST['year1block1']) ? trim($_POST['year1block1']) : '';
    $year1block2 = isset($_POST['year1block2']) ? trim($_POST['year1block2']) : '';
    $year1block3 = isset($_POST['year1block3']) ? trim($_POST['year1block3']) : '';
    $year1block4 = isset($_POST['year1block4']) ? trim($_POST['year1block4']) : '';
    $year1block5 = isset($_POST['year1block5']) ? trim($_POST['year1block5']) : '';

    // Check if all required fields are filled
    if (empty($PGPName) || empty($year1block1) || empty($year1block2) || empty($year1block3) || empty($year1block4) || empty($year1block5)) {
        die("Error: Missing required fields.");
    }

    try {
        require_once "DConnect.php";  // Include your database connection file

        // SQL query to insert data
        $query = "INSERT INTO `pgprogrammedata`(`PGPName`, `year1block1`, `year1block2`, `year1block3`, `year1block4`, `year1block5`) VALUES (?, ?, ?, ?, ?, ?);";
        
        // Prepare the statement
        $stmt = $pdo->prepare($query);

        // Execute the query with actual values
        $stmt->execute([$PGPName, $year1block1, $year1block2, $year1block3, $year1block4, $year1block5]);

        // Close the connection
        $pdo = null;
        $stmt = null;

        // Redirect to the desired page after successful insertion
        header("Location: updatepgcourses.html");
        exit();
    } catch (PDOException $e) {
        // In case of error, display the error message
        die("Query Failed: " . $e->getMessage());
    }
} else {
    // If the request is not POST, redirect to the Course page
    header("Location: updatepgcourses.html");
    exit();
}

?>
