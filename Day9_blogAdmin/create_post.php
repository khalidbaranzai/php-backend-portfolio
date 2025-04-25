<?php
session_start();
if (!isset($_SESSION["logged_in"])) {
    header("Location: login.php");
    exit;
}
require "db_config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $body = $_POST["body"];

    $stmt = $conn->prepare("INSERT INTO posts (title, body) VALUES (?, ?)");
    $stmt->bind_param("ss", $title, $body);
    $stmt->execute();

    echo "✅ Post added!";
}
?>

<a href="logout.php">Logout</a>

<h2>📝 Create a Blog Post</h2>
<form method="POST">
    <input type="text" name="title" required placeholder="Title"><br><br>
    <textarea name="body" required rows="6" cols="40"></textarea><br><br>
    <button type="submit">Post</button>
</form>
