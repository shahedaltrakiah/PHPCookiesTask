<?php
session_start(); // Start the session

// Generate a CSRF token if it doesn't exist
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32)); // Generate a random token
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the CSRF token is valid
    if (hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        // Process the form (e.g., save data to the database)
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        echo "<h2>Form Submitted Successfully!</h2>";
        echo "<p>Name: $name</p>";
        echo "<p>Email: $email</p>";

        // Clear CSRF token after form submission (optional)
        unset($_SESSION['csrf_token']);
    } else {
        // Invalid CSRF token
        echo "<h2>Error: Invalid CSRF token!</h2>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSRF Secure Form</title>
</head>
<body>
    <h1>Secure Form</h1>
    <form action="csrf_form.php" method="POST">
        <p>
            <label for="name">Name:</label>
            <input type="text" name="name" required>
        </p>
        <p>
            <label for="email">Email:</label>
            <input type="email" name="email" required>
        </p>
        <!-- Include the CSRF token as a hidden field -->
        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
