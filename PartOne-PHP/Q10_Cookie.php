<?php
// Define the cookie name
$cookie_name = "quiz_score";
$quiz_score = 0; // Default score

// Check if the form has been submitted to calculate the score
if (isset($_POST['submit_quiz'])) {
    // Check answers and calculate score
    $quiz_score = 0;
    
    if (isset($_POST['question1']) && $_POST['question1'] == 'A') {
        $quiz_score++;
    }
    if (isset($_POST['question2']) && $_POST['question2'] == 'B') {
        $quiz_score++;
    }
    if (isset($_POST['question3']) && $_POST['question3'] == 'C') {
        $quiz_score++;
    }
    
    // Store the score in a cookie for 1 hour
    setcookie($cookie_name, $quiz_score, time() + 3600, "/"); 

}

// If the cookie is set, retrieve the stored score
if (isset($_COOKIE[$cookie_name])) {
    $quiz_score = $_COOKIE[$cookie_name];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz with Cookies</title>
</head>
<body>

<h1>Question Quiz</h1>

<!-- Display the user's score -->
<h2 style="color:red;">Your total score is: <strong><?php echo $quiz_score; ?></strong></h2>

<form action="" method="POST">
    <p><strong>1. What is the capital of France?</strong></p>
    <label><input type="radio" name="question1" value="A"> A) Paris</label><br>
    <label><input type="radio" name="question1" value="B"> B) Rome</label><br>
    <label><input type="radio" name="question1" value="C"> C) Berlin</label><br>

    <p><strong>2. What is the largest planet in our solar system?</strong></p>
    <label><input type="radio" name="question2" value="A"> A) Earth</label><br>
    <label><input type="radio" name="question2" value="B"> B) Jupiter</label><br>
    <label><input type="radio" name="question2" value="C"> C) Mars</label><br>

    <p><strong>3. Who wrote "Romeo and Juliet"?</strong></p>
    <label><input type="radio" name="question3" value="A"> A) Charles Dickens</label><br>
    <label><input type="radio" name="question3" value="B"> B) Mark Twain</label><br>
    <label><input type="radio" name="question3" value="C"> C) William Shakespeare</label><br>

    <button type="submit" name="submit_quiz">Submit Quiz</button>
</form>

</body>
</html>
