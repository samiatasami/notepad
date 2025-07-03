<?php
// Create the files directory if it doesn't exist
if (!file_exists('files')) {
    mkdir('files', 0777, true);
}

// Get the filename from the form
$filename = $_POST['new_filename'];

// Basic validation
if (empty($filename)) {
    die("Filename cannot be empty!");
}

// Create the file path
$filepath = 'files/' . $filename;

// Check if file already exists
if (file_exists($filepath)) {
    die("File already exists!");
}

// Create the file
file_put_contents($filepath, '');

// Redirect back to the main page
header("Location: index.php");
exit();
?>