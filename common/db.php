<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "myphp";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Not commected with db" . $conn->connect_error);
}

echo "database connected";
?>