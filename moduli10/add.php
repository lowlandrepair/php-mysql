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
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $email = $_POST['email'];
            
            $sql = "insert into user (name, surname, email) values (:name, :surname, :email)";
            $sqlQuery = $conn->prepare($sql);
            
            $sqlQuery->bindParam(":name", $name);
            $sqlQuery->bindParam(":surname", $surname);
            $sqlQuery->bindParam(":email", $email);
            
            $sqlQuery->execute();
            
            echo "<div class='success-message'>Data saved successfully!</div>";
        }
        ?>
        
        <a href="index.php" class="dashboard-link">← Dashboard</a>
        
        <form action="add.php" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
                <label for="surname">Surname</label>
                <input type="text" id="surname" name="surname" placeholder="Enter your surname" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <button type="submit" name="submit">Add User</button>
        </form>
    </div>
</body>
</html>
