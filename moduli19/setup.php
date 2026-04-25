<?php
require_once 'config.php';

$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    question VARCHAR(255),
    answer VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

try {
    $pdo->exec($sql);
    echo "<div style='text-align:center; padding:50px; font-family:Arial;'>
        <h2 style='color:green;'>Setup Complete!</h2>
        <p>Database table 'users' created successfully.</p>
        <a href='index.php' style='padding:10px 20px; background:#007bff; color:white; text-decoration:none; border-radius:5px;'>Go to Registration</a>
    </div>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
