<?php
session_start();

// Check if the form is submitted and the "remember me" checkbox is checked
if (isset($_POST['username']) && isset($_POST['rememberme'])) {
    // Set a cookie to remember the username, valid for 7 days
    setcookie('username', $_POST['username'], time() + (7 * 24 * 60 * 60), "/");
} elseif (isset($_POST['username']) && !isset($_POST['rememberme'])) {
    // If "remember me" is not checked, delete the cookie if it exists
    setcookie('username', '', time() - 3600, "/");
}

// Retrieve the username from the cookie if it exists
$username = isset($_COOKIE['username']) ? $_COOKIE['username'] : '';
?>

<form action="" method="POST">
    <input type="text" name="username" placeholder="Username" value="<?php echo htmlspecialchars($username); ?>" required>
    <input type="checkbox" name="rememberme" <?php if ($username) echo 'checked'; ?>> Remember Me
    <button type="submit">Login</button>
</form>
