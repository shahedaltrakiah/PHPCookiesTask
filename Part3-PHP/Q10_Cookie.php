<?php
session_start(); // Start the session

// Check if this is the first visit
if (!isset($_SESSION['visit_time'])) {
    // Store the current time in the session variable
    $_SESSION['visit_time'] = date('Y-m-d H:i:s');
}

// Get the user's IP address
$user_ip = $_SERVER['REMOTE_ADDR'];

// Display visit time and IP address
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Activity Log</title>
</head>
<body>
    <h1>User Activity Log</h1>
    <p>Your visit time: <?php echo $_SESSION['visit_time']; ?></p>
    <p>Your IP address: <?php echo $user_ip; ?></p>
</body>
</html>
