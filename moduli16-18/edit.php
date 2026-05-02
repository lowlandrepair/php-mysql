<?php

include_once('config.php');

$id = $_GET['id'] ?? null;

if (!$id) {
    header('Location: dashboard.php');
    exit;
}

$sql = "SELECT * FROM users WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute([':id' => $id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    header('Location: dashboard.php');
    exit;
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'] ?? '';
    $surname = $_POST['surname'] ?? '';
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $sql = "UPDATE users SET name = :name, surname = :surname, username = :username, email = :email";
    $params = [
        ':name' => $name,
        ':surname' => $surname,
        ':username' => $username,
        ':email' => $email,
        ':id' => $id
    ];

    if (!empty($password)) {
        $sql .= ", password = :password";
        $params[':password'] = password_hash($password, PASSWORD_DEFAULT);
    }

    $sql .= " WHERE id = :id";

    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);

    header('Location: dashboard.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 50px; }
        form { max-width: 400px; margin: 0 auto; }
        label { display: block; margin-top: 10px; }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%; padding: 8px; margin-top: 5px;
        }
        button { margin-top: 20px; padding: 10px 20px; }
        a { display: block; margin-top: 10px; }
    </style>
</head>
<body>

<form method="post">
    <h2>Edit User</h2>

    <label>Name</label>
    <input type="text" name="name" value="<?= htmlspecialchars($user['name']) ?>" required>

    <label>Surname</label>
    <input type="text" name="surname" value="<?= htmlspecialchars($user['surname']) ?>" required>

    <label>Username</label>
    <input type="text" name="username" value="<?= htmlspecialchars($user['username']) ?>" required>

    <label>Email</label>
    <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>

    <label>Password (leave blank to keep current)</label>
    <input type="password" name="password">

    <button type="submit" name="submit">Save Changes</button>
    <a href="dashboard.php">Cancel</a>
</form>

</body>
</html>
