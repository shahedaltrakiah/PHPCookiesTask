<?php
$cookie_name = "User_Level";
$cookie_value = "Beginner"; 

// Check if the form has been submitted to update the cookie value
if (isset($_POST['userlevel']) && !empty($_POST['userlevel'])) {

    $cookie_value = $_POST['userlevel']; 

    echo "<p>The user level has been updated to: <strong>$cookie_value</strong></p>";
    
    setcookie($cookie_name, $cookie_value, time() + 3600, "/"); // Update the cookie
}
?>

<form action="" method="POST">
    <label for="userlevel">User Level:</label>
    <input type="text" name="userlevel" placeholder="Enter new user level" required>
    <button type="submit">Update User Level</button>
</form>
