<?php
$servername = "localhost";
$username = "root";
$password = null;
$database = "discuss";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("database connect error" . $conn->connect_error);
}

echo "database connected";
?>