<?php

$host = "localhost";
$db = "testnita";
$user = "root";
$pass = "";

try {
    $conn = new PDO("mysql:host=$host", $user, $pass);
    $conn->exec("CREATE DATABASE IF NOT EXISTS $db");
    echo "Database created or exists<br>";

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $sql = "CREATE TABLE IF NOT EXISTS users (
        id INT(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL
    )";

    $conn->exec($sql);
    echo "Users table created<br>";

    $sql = "CREATE TABLE IF NOT EXISTS category (
        id INT PRIMARY KEY,
        name VARCHAR(255) NOT NULL
    )";
    $conn->exec($sql);
    echo "Category table created<br>";

    $sql = "CREATE TABLE IF NOT EXISTS products (
        id INT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        category_id INT NOT NULL,
        FOREIGN KEY (category_id) REFERENCES category(id)
    )";
    $conn->exec($sql);
    echo "Products table created<br>";

    $sql = "INSERT INTO category (id, name) VALUES
        (1, 'Fruta'),
        (2, 'Bakery'),
        (3, 'Fast Food')";
    $conn->exec($sql);
    echo "Category data inserted<br>";

    $sql = "INSERT INTO products (id, name, category_id) VALUES
        (1, 'Molla', 1),
        (2, 'Torte', 2),
        (3, 'Pizza', 3),
        (4, 'Dardha', 1),
        (5, 'Hamburger', 3)";

    $conn->exec($sql);
    echo "Products data inserted<br>";

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}