<?php
session_start();

// Check if the user is logged in and has the 'admin' role
if (!isset($_SESSION['loggedin']) || $_SESSION['role'] !== 'admin') {
    echo "<p>Access Denied. You do not have permission to view this page.</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Page</title>
</head>
<body>

<h1>Welcome, Admin!</h1>
<p>This page is only accessible to administrators.</p>
<a href = "Q6_Cookie.php">Logout</a>

</body>
</html>
