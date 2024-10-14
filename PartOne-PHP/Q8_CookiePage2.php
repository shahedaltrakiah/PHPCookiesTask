<?php
// Define the cookie name
$cookie_name = "message1";

// Check if the cookie is set
if (isset($_COOKIE[$cookie_name])) {
    // Retrieve and display the cookie value
    $cookie_value = $_COOKIE[$cookie_name];
    echo "<p>The value of the cookie set on page1.php is: <strong>$cookie_value</strong></p>";
} else {
    // If the cookie is not set, inform the user
    echo "<p>No cookie is set.</p>";
}
?>
