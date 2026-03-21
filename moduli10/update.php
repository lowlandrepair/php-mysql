<?php
include 'config.php';

if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    try {
        if(!empty($password)) {
            $sql = "UPDATE users SET username = :username, password = :password WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':id', $id);
        } else {
            $sql = "UPDATE users SET username = :username WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':id', $id);
        }
        $stmt->execute();
        
        header("Location: dashboard.php");
        exit();
    } catch(PDOException $e) {
        echo "Error updating user: " . $e->getMessage();
    }
} else {
    header("Location: dashboard.php");
    exit();
}
?>
