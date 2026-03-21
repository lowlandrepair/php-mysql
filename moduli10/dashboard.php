<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<style>
    body {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        background-color: #f8f9fa;
        color: #333;
        line-height: 1.6;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 16px 0;
    }
    th, td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #f2f2f2;
    }
    h1 {
        font-size: 24px;
        margin-bottom: 8px;
    }
    h2 {
        font-size: 18px;
        margin-bottom: 4px;
    }
    p {
        margin-top: 0;
    }
    button {
        padding: 8px 16px;
        border: none;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
    }
    button:hover {
        background-color: #0069d9;
    }
    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 0 16px;
    }
</style>
<body>
<?php include 'config.php'; 

$sql = "SELECT * FROM users";
$getusers = $pdo->prepare($sql);
$getusers->execute();
$users = $getusers->fetchAll(PDO::FETCH_ASSOC);

?>



    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $user): ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['name'] ?></td>
                <td><?= $user['surname'] ?></td>
                <td><?= $user['email'] ?></td>
                <td>
                    <button onclick="window.location.href='edit.php?id=<?= $user['id'] ?>'">Edit</button>
                    <button onclick="confirmDelete(<?= $user['id'] ?>)">Delete</button>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <script>
        function confirmDelete(userId) {
            if(confirm('Are you sure you want to delete this user?')) {
                window.location.href = 'delete.php?id=' + userId;
            }
        }
    </script>

</body>
</html>