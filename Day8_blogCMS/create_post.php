<?php
require "db_config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $body = $_POST["body"];

    $sql = "INSERT INTO posts (title, body) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $title, $body);
    $stmt->execute();

    echo "✅ Post added successfully!";
}
?>

<h2>📝 Create a Blog Post</h2>
<form method="POST">
    <input type="text" name="title" placeholder="Post Title" required><br><br>
    <textarea name="body" placeholder="Write your blog post here..." rows="6" cols="40" required></textarea><br><br>
    <button type="submit">Post</button>
</form>
