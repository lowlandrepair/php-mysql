<?php
include 'config.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    try {
        $sql = "DELETE FROM users WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        
        header("Location: dashboard.php");
        exit();
    } catch(PDOException $e) {
        echo "Error deleting user: " . $e->getMessage();
    }
} else {
    echo "No user ID specified";
}
?>
