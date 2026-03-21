    <!DOCTYPE html>
<html>
<head>
    <title>Add a user</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Add a User</h1>
        
        <?php
        include_once('config.php');

        if(isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            try {
                $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
                $sqlQuery = $pdo->prepare($sql);
                
                $sqlQuery->bindParam(":username", $username);
                $sqlQuery->bindParam(":password", $password);
                
                $sqlQuery->execute();
                
                echo "<div class='success-message'>User added successfully!</div>";
            } catch(PDOException $e) {
                echo "Error adding user: " . $e->getMessage();
            }
        }
        ?>
        
        <a href="index.php" class="dashboard-link">← Dashboard</a>
        
        <form action="add.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter password" required>
            </div>
            <button type="submit" name="submit">Add User</button>
        </form>
    </div>
</body>
</html>
