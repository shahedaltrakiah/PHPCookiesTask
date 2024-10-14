<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Form</title>
</head>
<body>
    <h1>User Information Form</h1>

    <?php
    // Check if the first_name and last_name parameters are set
    if (isset($_GET['first_name']) && isset($_GET['last_name'])) {
        // Retrieve the first and last name from the URL parameters
        $firstName = htmlspecialchars($_GET['first_name']);
        $lastName = htmlspecialchars($_GET['last_name']);

        // Display the welcome message
        echo "<h2>Welcome, $firstName $lastName!</h2>";
    }
    ?>

    <form action="" method="GET">
        <p>
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" required>
        </p>
        <p>
            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" required>
        </p>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
