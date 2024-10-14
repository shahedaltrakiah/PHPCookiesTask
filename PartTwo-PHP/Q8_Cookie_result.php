<?php
session_start();

// Get the total score
$score = isset($_SESSION['score']) ? $_SESSION['score'] : 0;

// Clear the session after showing the result
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Result</title>
</head>
<body>
    <h1>Your Quiz Result</h1>
    <p>You scored <?php echo $score; ?> out of 3.</p>
    <a href="Q8_Cookie.php">Try Again</a>
</body>
</html>
