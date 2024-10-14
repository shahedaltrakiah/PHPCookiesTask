<?php
session_start(); // Start the session

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Store the answers in session variables
    $_SESSION['answers'] = [
        'question1' => $_POST['question1'],
        'question2' => $_POST['question2'],
        'question3' => $_POST['question3']
    ];
    // Redirect to summary page
    header('Location: Q10_Cookie_summary.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Survey</title>
</head>
<body>
    <h1>Survey</h1>
    <form action="" method="POST">
        <p>
            <label for="question1">1. What is your favorite color?</label><br>
            <input type="text" name="question1" required>
        </p>
        <p>
            <label for="question2">2. What is your favorite food?</label><br>
            <input type="text" name="question2" required>
        </p>
        <p>
            <label for="question3">3. What is your favorite hobby?</label><br>
            <input type="text" name="question3" required>
        </p>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
