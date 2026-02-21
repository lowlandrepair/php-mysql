<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dalmat";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DROP DATABASE IF EXISTS $dbname";
$conn->query(query: $sql);
echo "Database dropped successfully";

$sql = "CREATE DATABASE $dbname";
$conn->query(query: $sql);
echo "Database created successfully";

$conn->close();
?>
