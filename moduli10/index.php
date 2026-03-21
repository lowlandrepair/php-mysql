<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a user</title>
</head>
<body>
    <h1>Add a user</h1>
    <form action="add.php" method="POST">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="surname">Surname:</label>
            <input type="text" id="surname" name="surname" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <button type="submit" name="submit">Add User</button>
    </form>
</body>
</html>
