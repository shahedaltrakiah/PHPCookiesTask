<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Information</title>
</head>
<body>
    <h1>Server Information</h1>
    
    <ul>
        <li><strong>Server IP Address:</strong> <?php echo $_SERVER['SERVER_ADDR']; ?></li>
        <li><strong>Current Script Name:</strong> <?php echo $_SERVER['SCRIPT_NAME']; ?></li>
        <li><strong>User Agent (Browser Info):</strong> <?php echo $_SERVER['HTTP_USER_AGENT']; ?></li>
        <li><strong>Request Method:</strong> <?php echo $_SERVER['REQUEST_METHOD']; ?></li>
        <li><strong>Client IP Address:</strong> <?php echo $_SERVER['REMOTE_ADDR']; ?></li>
    </ul>
</body>
</html>
