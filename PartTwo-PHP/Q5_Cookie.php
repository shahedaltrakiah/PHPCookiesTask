<?php
session_start();

// If the login form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['loggedin'] = true;
    $_SESSION['last_activity'] = time(); // Store the time of login
    header("Location: Q5_dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

<h1>Login</h1>
<form action="" method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>

</body>
</html>
