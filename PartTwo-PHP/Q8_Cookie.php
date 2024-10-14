<?php
session_start();

// Array of quiz questions and answers
$questions = [
    1 => ['question' => 'What is the capital of France?', 'options' => ['Berlin', 'Madrid', 'Paris', 'Rome'], 'answer' => 2],
    2 => ['question' => 'What is 2 + 2?', 'options' => ['3', '4', '5', '6'], 'answer' => 1],
    3 => ['question' => 'What is the largest ocean?', 'options' => ['Atlantic', 'Pacific', 'Indian', 'Arctic'], 'answer' => 1]
];

// Initialize score if not already set
if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
}

// Get the current question number
$current_question = isset($_GET['q']) ? (int)$_GET['q'] : 1;

// Check if the user submitted an answer
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['answer'])) {
    $user_answer = (int)$_POST['answer'];
    
    // Check if the answer is correct
    if ($user_answer == $questions[$current_question]['answer']) {
        $_SESSION['score']++;  // Increment the score
    }

    // Move to the next question
    $current_question++;
    
    // If no more questions, go to the score page
    if ($current_question > count($questions)) {
        header("Location: Q8_Cookie_result.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
</head>
<body>
    <h1>Question <?php echo $current_question; ?></h1>
    <p><?php echo $questions[$current_question]['question']; ?></p>
    
    <form action="?q=<?php echo $current_question; ?>" method="POST">
        <?php foreach ($questions[$current_question]['options'] as $key => $option): ?>
            <label>
                <input type="radio" name="answer" value="<?php echo $key; ?>" required>
                <?php echo $option; ?>
            </label><br>
        <?php endforeach; ?>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

