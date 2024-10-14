<?php
// Define variables to store user input and error messages
$first_name = $last_name = $email = "";
$first_name_err = $last_name_err = $email_err = "";

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Validate first name
    if (empty($_POST['first_name'])) {
        $first_name_err = "First name is required";
    } else {
        $first_name = htmlspecialchars($_POST['first_name']);
    }

    // Validate last name
    if (empty($_POST['last_name'])) {
        $last_name_err = "Last name is required";
    } else {
        $last_name = htmlspecialchars($_POST['last_name']);
    }

    // Validate email
    if (empty($_POST['email'])) {
        $email_err = "Email is required";
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $email_err = "Invalid email format";
    } else {
        $email = htmlspecialchars($_POST['email']);
    }

    // If no errors, display the submitted data
    if (empty($first_name_err) && empty($last_name_err) && empty($email_err)) {
        echo "<h2>Form Submitted Successfully!</h2>";
        echo "<p><strong>First Name:</strong> $first_name</p>";
        echo "<p><strong>Last Name:</strong> $last_name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling with PHP</title>
</head>
<body>
    <h1>Submit Your Information</h1>
    <form action="" method="POST">
        <p>
            <label for="first_name">First Name:</label><br>
            <input type="text" name="first_name" value="<?php echo htmlspecialchars($first_name); ?>">
            <span style="color:red;"><?php echo $first_name_err; ?></span>
        </p>
        <p>
            <label for="last_name">Last Name:</label><br>
            <input type="text" name="last_name" value="<?php echo htmlspecialchars($last_name); ?>">
            <span style="color:red;"><?php echo $last_name_err; ?></span>
        </p>
        <p>
            <label for="email">Email:</label><br>
            <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>">
            <span style="color:red;"><?php echo $email_err; ?></span>
        </p>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
