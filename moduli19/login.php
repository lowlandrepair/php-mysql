<?php
session_start();
require_once 'config.php';

$error = '';

if (isset($_POST['submit'])) {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (empty($username) || empty($password)) {
        $error = 'Please enter both username and password';
    } else {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->execute([':username' => $username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header("Location: dashboard.php");
            exit;
        } else {
            $error = 'Invalid username or password';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-md-5">
      <div class="card">
        <div class="card-header text-center">Login</div>
        <div class="card-body">

          <?php if (isset($_SESSION['success'])): ?>
            <div class="alert alert-success text-center"><?php echo $_SESSION['success']; unset($_SESSION['success']); ?></div>
          <?php endif; ?>

          <?php if ($error): ?>
            <div class="alert alert-danger text-center"><?php echo $error; ?></div>
          <?php endif; ?>

          <form method="post" action="">
            <div class="form-group">
              <label>Username</label>
              <input type="text" name="username" class="form-control" required>
            </div>

            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" class="form-control" required>
            </div>

            <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
          </form>

          <div class="text-center mt-3">
            <a href="index.php">Don't have an account? Register</a>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
