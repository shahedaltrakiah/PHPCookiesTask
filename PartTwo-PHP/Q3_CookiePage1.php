<?php
session_start(); 

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store the submitted data in the session
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    
    // Redirect to Step 2
    header("Location: Q3_CookiePage2.php");
    exit; // Important to stop script execution after redirection
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Step 1 - User Information</title>
</head>
<body>

<h1>Step 1: Basic User Information</h1>

<form action="" method="POST">
    <label for="name">Name:</label>
    <input type="text" name="name" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" required>
    <br>
    <button type="submit">Next</button>
</form>

</body>
</html>
