<?php
session_start();

if (isset($_SESSION['flash_message'])) {
    // Store the message in a variable
    $message = $_SESSION['flash_message'];
    // Unset the message so it doesn't show on the next load
    unset($_SESSION['flash_message']);
} else {
    $message = ""; // No message
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Set a flash message based on form submission
    $_SESSION['flash_message'] = "Form submitted successfully!";
    // Redirect to the same page to avoid resubmission
    header("Location: " . $_SERVER['PHP_SELF']);
    exit; // Important to stop script execution after redirection
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flash Messages with Sessions</title>
</head>
<body>

<h1>Flash Message Example</h1>

<!-- Display the flash message if it exists -->
<?php if ($message): ?>
    <p style="color: green;"><?php echo $message; ?></p>
<?php endif; ?>

<!-- Simple form for submission -->
<form action="" method="POST">
    <button type="submit">Submit Form</button>
</form>

</body>
</html>
