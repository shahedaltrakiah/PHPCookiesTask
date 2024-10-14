<?php
session_start(); // Start the session

// Check if the answers are set in the session
if (!isset($_SESSION['answers'])) {
    // Redirect to the survey page if answers are not found
    header('Location: Q10_Cookie.php');
    exit;
}

// Retrieve the answers from the session
$answers = $_SESSION['answers'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Summary</title>
</head>
<body>
    <h1>Survey Summary</h1>
    <p><strong>1. What is your favorite color?</strong> <?php echo htmlspecialchars($answers['question1']); ?></p>
    <p><strong>2. What is your favorite food?</strong> <?php echo htmlspecialchars($answers['question2']); ?></p>
    <p><strong>3. What is your favorite hobby?</strong> <?php echo htmlspecialchars($answers['question3']); ?></p>

    <p><a href="Q10_Cookie.php">Take the survey again</a></p>

</body>
</html>
