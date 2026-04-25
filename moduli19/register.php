<?php
include 'config.php';
if(isset($_POST['submit'])) {
    $emri = $_POST['emri'] ?? '';
    $mbiemri = $_POST['mbiemri'] ?? '';
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    if(empty($emri) || empty($mbiemri) || empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        echo "All fields are required";
    }
    else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (emri, mbiemri, username, email, phone, password) " .
               "VALUES (:emri, :mbiemri, :username, :email, :phone, :password)";
        $insertsql = $pdo->prepare($sql);
        $insertsql->bindValue(':emri', $emri);
        $insertsql->bindValue(':mbiemri', $mbiemri);
        $insertsql->bindValue(':username', $username);
        $insertsql->bindValue(':email', $email);
        $insertsql->bindValue(':phone', $phone);
        $insertsql->bindValue(':password', $hashed_password);
        $insertsql->execute();
        $_SESSION['success'] = "Account created successfully!";
        header("location: login.php");
        exit();
    }
}
