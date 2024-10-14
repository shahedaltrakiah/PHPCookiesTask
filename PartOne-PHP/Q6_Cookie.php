<?php
// Define the cookie name and value
$cookie_name = "favorite_fruit";
$cookie_value = "Apple";

// Check if the cookie is set and retrieve its value if available
if (isset($_COOKIE[$cookie_name])) {
    $cookie_value = $_COOKIE[$cookie_name];
}

// Set the cookie initially (only for testing, remove it if not needed)
setcookie($cookie_name, $cookie_value, time() + 3600, "/"); // Cookie expires in 1 hour

// Handle cookie deletion
if (isset($_POST['delete_cookie'])) {
    setcookie($cookie_name, "", time() - 3600, "/"); // Delete the cookie by setting its expiration time to the past
    // Redirect to avoid form re-submission and reflect cookie deletion immediately
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Example</title>
</head>
<body>

<!-- Display the cookie value if it's set -->
<?php if (isset($_COOKIE[$cookie_name])): ?>
    <p>Your favorite fruit is: <strong><?php echo $cookie_value; ?></strong></p>
<?php else: ?>
    <p>No cookie is set.</p>
<?php endif; ?>

<!-- Form to delete the cookie -->
<form action="" method="POST">
    <button type="submit" name="delete_cookie">Delete Cookie</button>
</form>

</body>
</html>
