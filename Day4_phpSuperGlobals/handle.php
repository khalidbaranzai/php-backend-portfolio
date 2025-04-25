<?php
// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize input
    $name = htmlspecialchars($_POST["name"]);
    $age = (int) $_POST["age"];

    echo "<h2>Form Data Received:</h2>";
    echo "Name: " . $name . "<br>";
    echo "Age: " . $age . "<br><br>";

    // Superglobal examples
    echo "<h3>Superglobals Info:</h3>";
    echo "Request Method: " . $_SERVER["REQUEST_METHOD"] . "<br>";
    echo "Script Name: " . $_SERVER["SCRIPT_NAME"] . "<br>";
    echo "Server Name: " . $_SERVER["SERVER_NAME"] . "<br>";
} else {
    echo "No data submitted!";
}
?>
