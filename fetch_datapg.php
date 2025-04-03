<?php
header("Content-Type: application/json");
require 'DConnect.php'; // Ensure this file is included

try {
    $stmt = $pdo->query("SELECT  `id`, `PGPName`, `year1block1`, `year1block2`, `year1block3`, `year1block4`, `year1block5` FROM `pgprogrammedata` ");
    $students = $stmt->fetchAll();

    if (!$students) {
        echo json_encode(["error" => "No data found"]);
        exit;
    }

    echo json_encode($students, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
} catch (PDOException $e) {
    echo json_encode(["error" => "Database query failed: " . $e->getMessage()]);
}
?>
