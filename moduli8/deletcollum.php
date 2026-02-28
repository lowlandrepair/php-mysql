<?php
$host = "localhost";
$db = "testnita";
$user = "root";
$pass = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $sql = "ALTER TABLE products DROP COLUMN name";

    $conn->exec($sql);

    echo "COLUMN DELETED";

} catch (Exception $e) {
    echo "COLUMN NOT DELETED";
}
