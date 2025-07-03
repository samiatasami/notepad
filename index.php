<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Notepad</title>
    <link rel="stylesheet" href="global.css">
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .container { max-width: 800px; margin: 0 auto; }
        textarea { width: 100%; height: 200px; }
        .file-list { margin: 20px 0; }
    </style>
</head>
<body>
    <div class="container">
        <h1>PHP Notepad</h1>
        
        <!-- File Selection Form -->
        <form method="post" action="read.php">
            <h2>Read a File</h2>
            <select name="filename">
                <?php
                // List all files in the files directory
                $files = scandir('files');
                foreach ($files as $file) {
                    if ($file != '.' && $file != '..') {
                        echo "<option value='$file'>$file</option>";
                    }
                }
                ?>
            </select>
            <button type="submit">Read File</button>
        </form>

        <!-- Create New File Form -->
        <form method="post" action="create.php">
            <h2>Create New File</h2>
            <input type="text" name="new_filename" placeholder="Filename.txt" required>
            <button type="submit">Create</button>
        </form>

        <!-- Write to File Form -->
        <form method="post" action="write.php">
            <h2>Write to File (Overwrites content)</h2>
            <select name="filename">
                <?php
                foreach ($files as $file) {
                    if ($file != '.' && $file != '..') {
                        echo "<option value='$file'>$file</option>";
                    }
                }
                ?>
            </select><br>
            <textarea name="content" placeholder="Enter your text here"></textarea><br>
            <button type="submit">Save to File</button>
        </form>

        <!-- Append to File Form -->
        <form method="post" action="append.php">
            <h2>Append to File</h2>
            <select name="filename">
                <?php
                foreach ($files as $file) {
                    if ($file != '.' && $file != '..') {
                        echo "<option value='$file'>$file</option>";
                    }
                }
                ?>
            </select><br>
            <textarea name="content" placeholder="Enter text to append"></textarea><br>
            <button type="submit">Append to File</button>
        </form>
    </div>
</body>
</html>