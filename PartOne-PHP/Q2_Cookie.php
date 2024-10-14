<?php
$cookie_name = "Shahed";

if(isset($_COOKIE[$cookie_name])) {
    $visitCount = $_COOKIE[$cookie_name];
    $visitCount++;
} else {
    $visitCount = 1;
}

setcookie($cookie_name, $visitCount, time() + 1, "/"); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <p>You have visited this website <strong><?php echo $visitCount; ?></strong> times.</p>
</body>
</html>
