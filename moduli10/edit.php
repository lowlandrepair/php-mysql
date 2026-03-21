<?php
include 'config.php';

if(!isset($_GET['id'])) {
    header("Location: dashboard.php");
    exit();
}

$id = $_GET['id'];

if(isset($_POST['submit'])) {
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
}

try {
    $sql = "SELECT * FROM users WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if(!$user) {
        header("Location: dashboard.php");
        exit();
    }
} catch(PDOException $e) {
    echo "Error fetching user: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Edit User</h1>
        
        <a href="dashboard.php" class="dashboard-link">← Dashboard</a>
        
        <form action="edit.php?id=<?= $id ?>" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" value="<?= htmlspecialchars($user['username']) ?>" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Leave blank to keep current password">
            </div>
            <button type="submit" name="submit">Update User</button>
        </form>
    </div>
</body>
</html>
