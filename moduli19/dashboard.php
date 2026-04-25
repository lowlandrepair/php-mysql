<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h4>
                    <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
                </div>
                <div class="card-body">
                    <p class="text-center">You have successfully logged in.</p>
                    <p class="text-center text-success">Account created and login working!</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
