<?php
// Get the filename and content from the form
$filename = $_POST['filename'];
$content = $_POST['content'];
$filepath = 'files/' . $filename;

// Check if file exists
if (!file_exists($filepath)) {
    die("File doesn't exist!");
}

// Append content to file
file_put_contents($filepath, $content, FILE_APPEND);

// Redirect back to the main page
header("Location: index.php");
exit();
?>