<?php
include 'config.php';

if(!isset($_GET['id'])) {
    header("Location: dashboard.php");
    exit();
}

$id = $_GET['id'];

if(isset($_POST['submit'])) {
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
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="<?= htmlspecialchars($user['name']) ?>" required>
            </div>
            <div class="form-group">
                <label for="surname">Surname</label>
                <input type="text" id="surname" name="surname" value="<?= htmlspecialchars($user['surname']) ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>
            </div>
            <button type="submit" name="submit">Update User</button>
        </form>
    </div>
</body>
</html>
