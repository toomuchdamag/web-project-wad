<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Sanitize and validate inputs (basic example, you may need more specific validation)
  $UGPName = isset($_POST['UGPName']) ? trim($_POST['UGPName']) : '';
  $year1block1 = isset($_POST['year1block1']) ? trim($_POST['year1block1']) : '';
  $year1block2 = isset($_POST['year1block2']) ? trim($_POST['year1block2']) : '';
  $year1block3 = isset($_POST['year1block3']) ? trim($_POST['year1block3']) : '';
  $year1block4 = isset($_POST['year1block4']) ? trim($_POST['year1block4']) : '';
  $year2block1 = isset($_POST['year2block1']) ? trim($_POST['year2block1']) : '';
  $year2block2 = isset($_POST['year2block2']) ? trim($_POST['year2block2']) : '';
  $year2block3 = isset($_POST['year2block3']) ? trim($_POST['year2block3']) : '';
  $year2block4 = isset($_POST['year2block4']) ? trim($_POST['year2block4']) : '';
  $year3block1 = isset($_POST['year3block1']) ? trim($_POST['year3block1']) : '';
  $year3block2 = isset($_POST['year3block2']) ? trim($_POST['year3block2']) : '';
  $year3block3 = isset($_POST['year3block3']) ? trim($_POST['year3block3']) : '';
  $year3block4 = isset($_POST['year3block4']) ? trim($_POST['year3block4']) : '';

  // Check if all required fields are filled
  if (empty($UGPName) || empty($year1block1) || empty($year1block2) || empty($year1block3) || empty($year1block4) || empty($year2block1) || empty($year2block2) || empty($year2block3) || empty($year2block4) || empty($year3block1) || empty($year3block2) || empty($year3block3) || empty($year3block4)) {
    die("Error: Missing required fields.");
  }

  try {
      require_once "DConnect.php";  // Include your database connection file

      // SQL query to insert data
      $query = "INSERT INTO `ugprogrammedata`(`UGPName`, `year1block1`, `year1block2`, `year1block3`, `year1block4`, `year2block1`, `year2block2`, `year2block3`, `year2block4`, `year3block1`, `year3block2`, `year3block3`, `year3block4`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
      
      // Prepare the statement
      $stmt = $pdo->prepare($query);

      // Execute the query with actual values
      $stmt->execute([$UGPName, $year1block1, $year1block2, $year1block3, $year1block4, $year2block1, $year2block2, $year2block3, $year2block4, $year3block1, $year3block2, $year3block3, $year3block4]);

      // Close the connection
      $pdo = null;
      $stmt = null;

      // Redirect to the desired page after successful insertion
      header("Location: updateugcourses.html");
      die();
  } catch (PDOException $e) {
      // In case of error, display the error message
      die("Query Failed: " . $e->getMessage());
  }
} else {
  // If the request is not POST, redirect to the Course page
  header("Location: updateugcourses.html");
  die();
}

?>
