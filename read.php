<?php
// Get the filename from the form
$filename = $_POST['filename'];
$filepath = 'files/' . $filename;

// Check if file exists
if (!file_exists($filepath)) {
    die("File doesn't exist!");
}

// Read the file content
$content = file_get_contents($filepath);

// Display the content
echo "<h1>Content of $filename</h1>";
echo "<pre>" . htmlspecialchars($content) . "</pre>";
echo "<a href='index.php'>Back to Notepad</a>";
?>