<?php

session_start();

include_once('config.php');

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if(empty($username) || empty($password)){
        echo "Please fill in all fields";
    }
}else{
    $sql = "SELECT id, name, surname, username, email, password FROM users WHERE username=:username";

    $selectUser = $connect->prepare($sql);
    $selectUser->bintdparam(':username', $username);
    $selectUser->execute();
   
}

?>