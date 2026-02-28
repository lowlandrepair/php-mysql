<?php
$host = "localhost";
$db = "testnita";
$user = "root";
$pass = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $sql = "DROP TABLE IF EXISTS users";

    $conn->exec($sql);

    echo "TABLE DELETED";

} catch (Exception $e) {
    echo "TABLE NOT DELETED";
}
