<?php
$host = "localhost";
$db = "testnita";
$user = "root";
$pass = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $username = "dalmatademi1";
    $password = "dalmatademi2";

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    $conn->exec($sql);

    echo "User inserted successfully";

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>