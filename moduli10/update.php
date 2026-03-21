<?php
include 'config.php';

if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    
    try {
        $sql = "UPDATE users SET name = :name, surname = :surname, email = :email WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':surname', $surname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':id', $id);
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
