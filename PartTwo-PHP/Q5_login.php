<?php
session_start();

if (isset($_GET['timeout'])) {
    echo "<p>Your session has expired. Please log in again.</p>";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['loggedin'] = true;
    $_SESSION['last_activity'] = time(); // Store the time of login
    header("Location: dashboard.php");
    exit;
}
?>
