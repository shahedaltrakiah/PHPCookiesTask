<?php
// Cookie name
$cookie_name = "Shahed";

if (isset($_COOKIE[$cookie_name])) {
    // If the cookie is set, retrieve its value
    $cookie_value = $_COOKIE[$cookie_name];
} else {
    // If the cookie is not set or has expired, set a default message
    $cookie_value = "Cookie not set or expired.";

    // Set the cookie with a value and an expiration time of 1 minute (60 seconds)
    setcookie($cookie_name, "Hello, this is Shahed's cookie!", time() + 60, "/");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Expiry Experiment</title>
</head>
<body>
    <p><strong>Cookie Value: <?php echo $cookie_value; ?></strong></p>
</body>
</html>
