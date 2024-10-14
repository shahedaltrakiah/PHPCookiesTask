<?php
// Start the session
session_start();

// Handle form submission to store user preferences in session
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['theme'] = $_POST['theme'];
    $_SESSION['language'] = $_POST['language'];
}

// Set default preferences if session variables are not set
$theme = isset($_SESSION['theme']) ? $_SESSION['theme'] : 'light';
$language = isset($_SESSION['language']) ? $_SESSION['language'] : 'English';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Preferences Example</title>

    <!-- Apply theme based on session data -->
    <style>
        body {
            background-color: <?php echo $theme === 'dark' ? '#333' : '#fff'; ?>;
            color: <?php echo $theme === 'dark' ? '#fff' : '#000'; ?>;
        }
    </style>
</head>
<body>
    <h1><?php echo $language === 'English' ? 'Welcome!' : 'مرحبا!'; ?></h1>

    <form action="" method="POST">
        <label for="theme">Select Theme:</label>
        <select name="theme" id="theme">
            <option value="light" <?php if ($theme == 'light') echo 'selected'; ?>>Light</option>
            <option value="dark" <?php if ($theme == 'dark') echo 'selected'; ?>>Dark</option>
        </select>
        <br>

        <label for="language">Select Language:</label>
        <select name="language" id="language">
            <option value="English" <?php if ($language == 'English') echo 'selected'; ?>>English</option>
            <option value="Arabic" <?php if ($language == 'Arabic') echo 'selected'; ?>>Arabic</option>
        </select>
        <br><br>

        <button type="submit">Save Preferences</button>
    </form>
</body>
</html>
