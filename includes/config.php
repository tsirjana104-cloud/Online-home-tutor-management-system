<?php

$host = "localhost";
$user = "root";
$dbname = "tutor_system";
$password = "12345678";

try {
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
  echo "Connected successfully";
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

if(session_status() == PHP_SESSION_NONE){
  session_start();
}

?>