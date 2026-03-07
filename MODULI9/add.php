<?php

include_once 'config.php';

if(isset($_POST['submit'])) {
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
        $sqlquery = $pdo->prepare($sql);
        
        $sqlquery->bindParam(':username', $username);
        $sqlquery->bindParam(':password', $password);
        $sqlquery->bindParam(':email', $email);
        
        if($sqlquery->execute()) {
            header("Location: success.html");
            exit();
        } else {
            header("Location: error.html");
            exit();
        }
    } catch(PDOException $e) {
        header("Location: database_error.html");
        exit();
    }
} else {
    header("Location: form_error.html");
    exit();
}
?>
