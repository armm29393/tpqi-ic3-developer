<?php
$server = "localhost";
$user = "root";
$pass = "12345678";
$dbname = "restaurant";
$conn = new mysqli($server, $user, $pass, $dbname);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
?>