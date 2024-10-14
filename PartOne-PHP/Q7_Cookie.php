<?php
// Define the cookie name and value
$cookie_name = "secure_cookie";
$cookie_value = "ThisIsASecureCookieValue";

// Set a secure cookie that is HTTP-only
setcookie($cookie_name, $cookie_value, time() + 3600, "/", "", true, true); // Expires in 1 hour

// Display a message confirming the cookie has been set
echo "<p>Secure cookie has been set.</p>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Cookie Example</title>
</head>
<body>

<!-- Button to try accessing the cookie via JavaScript -->
<button onclick="tryToAccessCookie()">Try to Access Cookie</button>

</body>
</html>
