<?php
// Initialize variables
$name = $message = "";

// Check if form is submitted using either GET or POST
if (isset($_REQUEST['submit'])) {
    $name = htmlspecialchars($_REQUEST['name']);
    $message = htmlspecialchars($_REQUEST['message']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form (GET/POST)</title>
</head>
<body>
    <h1>Contact Form</h1>

    <!-- Contact form with both GET and POST options -->
    <form action="" method="POST"> <!-- Change method to GET or POST as needed -->
        <p>
            <label for="name">Your Name:</label><br>
            <input type="text" name="name" placeholder="Enter your name" required>
        </p>
        <p>
            <label for="message">Your Message:</label><br>
            <textarea name="message" placeholder="Enter your message" required></textarea>
        </p>
        <button type="submit" name="submit">Submit</button>
    </form>

    <!-- Display the submitted data -->
    <?php if (!empty($name) && !empty($message)) : ?>
        <h2>Form Data Received:</h2>
        <p><strong>Name:</strong> <?php echo $name; ?></p>
        <p><strong>Message:</strong> <?php echo $message; ?></p>
    <?php endif; ?>
</body>
</html>
