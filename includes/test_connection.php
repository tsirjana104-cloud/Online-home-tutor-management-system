<?php

// This is for testing only
require_once 'config.php';

echo "Database connected successfully!<br><br>";

$stmt = $conn->query("SELECT * FROM subjects");
echo "<strong>Subjects:</strong><br>";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "- " . $row['name'] . "<br>";
}
?>