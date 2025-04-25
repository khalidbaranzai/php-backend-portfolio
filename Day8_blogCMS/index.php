<?php
require "db_config.php";

$result = $conn->query("SELECT * FROM posts ORDER BY created_at DESC");

echo "<h2>📰 Blog Posts</h2>";

while ($row = $result->fetch_assoc()) {
    echo "<div style='border:1px solid #ccc; padding:10px; margin-bottom:15px;'>";
    echo "<h3>" . htmlspecialchars($row['title']) . "</h3>";
    echo "<p>" . nl2br(htmlspecialchars($row['body'])) . "</p>";
    echo "<small>📅 Posted on: " . date("d M Y - H:i", strtotime($row['created_at'])) . "</small>";
    echo "</div>";
}
?>

