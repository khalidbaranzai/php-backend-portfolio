<?php
session_start();
if (!isset($_SESSION["logged_in"])) {
    header("Location: login.php");
    exit;
}
require "db_config.php";

$id = $_GET["id"];
$result = $conn->query("SELECT * FROM posts WHERE id = $id");
$post = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $body = $_POST["body"];

    $stmt = $conn->prepare("UPDATE posts SET title = ?, body = ? WHERE id = ?");
    $stmt->bind_param("ssi", $title, $body, $id);
    $stmt->execute();

    header("Location: index.php");
}
?>

<h2>✏️ Edit Post</h2>
<form method="POST">
    <input type="text" name="title" value="<?= htmlspecialchars($post['title']) ?>"><br><br>
    <textarea name="body" rows="6" cols="40"><?= htmlspecialchars($post['body']) ?></textarea><br><br>
    <button type="submit">Update</button>
</form>
