<?php

require_once 'config.php';

if (isset($pdo)) {
    echo "Database connection: SUCCESS<br><br>";
    echo '<a href="logform.php">Go to Login/Signup Form</a>';
} else {
    echo "Database connection: FAILED";
}
