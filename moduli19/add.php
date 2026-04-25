<?php
require_once 'config.php';

if (isset($_POST['submit'])) {
    $username = $_POST['user_name'];
    $password = password_hash($_POST['user_password'], PASSWORD_DEFAULT);
    $email = $_POST['user_email'];
    $question = $_POST['user_question'];
    $answer = $_POST['user_answer'];

    try {
        $stmt = $pdo->prepare("INSERT INTO users (username, password, email, question, answer, created_at)
                               VALUES (:username, :password, :email, :question, :answer, NOW())");
        $stmt->execute([
            ':username' => $username,
            ':password' => $password,
            ':email' => $email,
            ':question' => $question,
            ':answer' => $answer
        ]);

        header("Location: index.php?success=1");
        exit;
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
} else {
    header("Location: index.php");
    exit;
}
