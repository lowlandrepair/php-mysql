<?php
$host = "localhost";
$db = "testnita";
$user = "root";
$pass = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $sql = "ALTER TABLE users ADD tel INT(12)";

    $conn->exec($sql);

    echo "COLUMN ADDED";

} catch (Exception $e) {
    echo "COLUMN NOT ADDED";
}
