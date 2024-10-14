<?php
session_start();

// Check if the user is logged in and has the 'viewer' role
if (!isset($_SESSION['loggedin']) || $_SESSION['role'] !== 'viewer') {
    echo "<p>Access Denied. You do not have permission to view this page.</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Viewer Page</title>
</head>
<body>

<h1>Welcome, Viewer!</h1>
<p>This page is only accessible to viewers.</p>
<a href = "Q6_Cookie.php">Logout</a>

</body>
</html>
