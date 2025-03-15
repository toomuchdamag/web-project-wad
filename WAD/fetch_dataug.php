<?php
header("Content-Type: application/json");
require 'DConnect.php'; // Ensure this file is included

try {
    $stmt = $pdo->query("SELECT  `id`, `UGPName`, `year1block1`, `year1block2`, `year1block3`, `year1block4`, `year2block1`, `year2block2`, `year2block3`, `year2block4`, `year3block1`, `year3block2`, `year3block3`, `year3block4` FROM `ugprogrammedata` ");
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
