<?php
require "db_config.php";
session_start();

$result = $conn->query("SELECT * FROM posts ORDER BY created_at DESC");

echo "<h2>📰 Blog Posts</h2>";

while ($row = $result->fetch_assoc()) {
    echo "<div style='border:1px solid #ccc; padding:10px; margin-bottom:15px;'>";
    echo "<h3>" . htmlspecialchars($row['title']) . "</h3>";
    echo "<p>" . nl2br(htmlspecialchars($row['body'])) . "</p>";
    echo "<small>📅 " . date("d M Y - H:i", strtotime($row['created_at'])) . "</small><br>";

    if (isset($_SESSION["logged_in"])) {
        echo "<a href='edit_post.php?id={$row['id']}'>✏️ Edit</a> | ";
        echo "<a href='delete_post.php?id={$row['id']}' onclick=\"return confirm('Delete this post?')\">🗑️ Delete</a>";
    }

    echo "</div>";
}

if (isset($_SESSION["logged_in"])) {
    echo "<a href='create_post.php'>➕ New Post</a> | <a href='logout.php'>Logout</a>";
} else {
    echo "<a href='login.php'>🔐 Admin Login</a>";
}
?>
