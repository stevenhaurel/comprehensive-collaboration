<?php
/**
 * Simple PHP Project
 * A basic PHP application demonstrating core functionality
 */

// Display PHP information
echo "<h1>Welcome to Simple PHP Project</h1>";
echo "<p>Current PHP Version: " . phpversion() . "</p>";
echo "<p>Server Time: " . date('Y-m-d H:i:s') . "</p>";

// Simple greeting function
function greet($name = "Guest") {
    return "Hello, " . htmlspecialchars($name) . "!";
}

echo "<h2>" . greet("World") . "</h2>";

// Simple array demonstration
$items = ["PHP", "HTML", "CSS", "JavaScript"];
echo "<h3>Technologies:</h3>";
echo "<ul>";
foreach ($items as $item) {
    echo "<li>" . $item . "</li>";
}
echo "</ul>";

// Simple form example
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Project</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f4f4f4;
        }
        h1 { color: #333; }
        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username'])) {
            $username = $_POST['username'];
            echo "<p><strong>" . greet($username) . "</strong></p>";
        }
        ?>
        <form method="POST" action="">
            <label for="username">Enter your name:</label><br>
            <input type="text" id="username" name="username" required>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
