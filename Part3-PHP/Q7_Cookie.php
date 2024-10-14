<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the file was uploaded without errors
    if (isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] === 0) {
        // Get the file's original name, type, and size
        $fileName = $_FILES['fileToUpload']['name'];
        $fileType = $_FILES['fileToUpload']['type'];
        $fileSize = $_FILES['fileToUpload']['size'];
        
        // You can move the uploaded file to a specific directory
        // $targetDirectory = "uploads/";
        // move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $targetDirectory . $fileName);
        
        echo "<h2>File Uploaded Successfully!</h2>";
        echo "<p><strong>Original File Name:</strong> $fileName</p>";
        echo "<p><strong>File Type:</strong> $fileType</p>";
        echo "<p><strong>File Size:</strong> $fileSize bytes</p>";
    } else {
        echo "<h2>Error: " . $_FILES['fileToUpload']['error'] . "</h2>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <h1>Upload a File</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <p>
            <label for="fileToUpload">Select a file to upload:</label>
            <input type="file" name="fileToUpload" id="fileToUpload" required>
        </p>
        <button type="submit">Upload File</button>
    </form>
</body>
</html>
