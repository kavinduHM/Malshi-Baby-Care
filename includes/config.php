<?php
$host = "localhost";
$dbname = "Malshi_Baby_Care";
$user = "root";
$pass = ""; // Leave blank if no password in XAMPP

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
