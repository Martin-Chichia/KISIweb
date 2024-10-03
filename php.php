<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);

    // Check if name and age are not empty
    if (!empty($name) && !empty($age)) {
        echo "Hello, " . $name . "!<br>";
        echo "You are " . $age . " years old.";
    } else {
        echo "Please enter both your name and age.";
    }
} else {
    echo "Invalid request method.";
}
?>
