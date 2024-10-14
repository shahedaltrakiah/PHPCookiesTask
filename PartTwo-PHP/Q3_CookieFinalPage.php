<?php
session_start(); // Start the session

// Check if all session variables are set
if (!isset($_SESSION['name'], $_SESSION['email'], $_SESSION['address'], $_SESSION['phone'])) {
    header("Location: Q3_CookiePage1.php"); // Redirect to Step 1 if any information is missing
    exit; // Important to stop script execution after redirection
}

// Handle final submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the data (e.g., save to database, send email, etc.)
    
    // Clear session data after submission
    session_destroy();
    
    echo "<h1>Thank you!</h1>";
    echo "<p>Your information has been submitted successfully.</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Step - Review Your Information</title>
</head>
<body>

<h1>Final Step: Review Your Information</h1>

<p><strong>Name:</strong> <?php echo $_SESSION['name']; ?></p>
<p><strong>Email:</strong> <?php echo $_SESSION['email']; ?></p>
<p><strong>Address:</strong> <?php echo $_SESSION['address']; ?></p>
<p><strong>Phone:</strong> <?php echo $_SESSION['phone']; ?></p>

<form action="" method="POST">
    <button type="submit">Submit Information</button>
</form>

</body>
</html>
