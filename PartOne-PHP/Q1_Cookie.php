<?php
if (isset($_POST['color'])) {
    setcookie('background_color', $_POST['color'], time() + 500);
}

$backgroundColor = isset($_COOKIE['background_color']) ? $_COOKIE['background_color'] : 'white';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Background Color Preference</title>
</head>

<body style="background-color: <?php echo $backgroundColor; ?>;">
    <form method="POST" action="">
        <select name="color">
            <option value="red" <?php if ($backgroundColor == 'red')
                echo 'selected'; ?>>Red</option>
            <option value="blue" <?php if ($backgroundColor == 'blue')
                echo 'selected'; ?>>Blue</option>
            <option value="green" <?php if ($backgroundColor == 'green')
                echo 'selected'; ?>>Green</option>
        </select>
        <button type="submit">Save</button>
    </form>
</body>

</html>