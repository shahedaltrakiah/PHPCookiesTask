<?php
session_start(); // Start the session

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store the submitted data in the session
    $_SESSION['address'] = $_POST['address'];
    $_SESSION['phone'] = $_POST['phone'];
    
    // Redirect to Final Step
    header("Location: Q3_CookieFinalPage.php");
    exit; // Important to stop script execution after redirection
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Step 2 - Additional Details</title>
</head>
<body>

<h1>Step 2: Additional Details</h1>

<form action="" method="POST">
    <label for="address">Address:</label>
    <input type="text" name="address" required>
    <br>
    <label for="phone">Phone:</label>
    <input type="tel" name="phone" required>
    <br>
    <button type="submit">Next</button>
</form>

</body>
</html>
