<?php

require_once 'config.php';

$stmt = $conn->prepare("SELECT * FROM users");
$stmt->execute();
echo "Connected successfully";

?>