<?php
session_start();

// Example login with hardcoded users
$users = [
    'admin' => 'admin',
    'user' => 'viewer'
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    
    if (isset($users[$username])) {
        $_SESSION['loggedin'] = true;
        $_SESSION['role'] = $users[$username]; // Store user's role in session
        if ( $_SESSION['role'] == 'admin') {
            header("Location: Q6_Cookie_Admin.php");

        }else {
            header("Location: Q6_Cookie_Viewer.php");
        }
        exit;
    } else {
        echo "<p>Invalid username</p>";
    }
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
    <input type="text" name="username" placeholder="Enter username" required>
    <button type="submit">Login</button>
</form>

</body>
</html>
