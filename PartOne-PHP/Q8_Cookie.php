<?php
// Define cookie name, value, and settings
$cookie_name = "message1";
$cookie_value = "Hello from Page 1";

setcookie($cookie_name, $cookie_value, time() + 3600, "/", "");

// Inform the user that the cookie is set
echo "Cookie has been set. Go to page2.php to retrieve the cookie.";
?>
