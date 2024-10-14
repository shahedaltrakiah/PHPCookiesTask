<?php
session_start();

// Set the session timeout duration (5 minutes)
$timeout_duration = 5;

// Check if user is logged in
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit;
}

// Check if the session has expired
if (time() - $_SESSION['last_activity'] > $timeout_duration) {
    session_unset(); // Unset session variables
    session_destroy(); // Destroy the session
    header("Location: Q5_login.php?timeout=1"); // Redirect with a timeout message
    exit;
}

// Update the last activity time
$_SESSION['last_activity'] = time();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>

<h1>Welcome to the Dashboard</h1>
<p>You are logged in!</p>

</body>
</html>
