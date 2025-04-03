<?php
header("Content-Type: application/json");
require 'DConnect.php'; // Ensure this file is included

try {
    $stmt = $pdo->query("SELECT id, studentname AS name, email, course, message, date_added FROM studentdata");
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
