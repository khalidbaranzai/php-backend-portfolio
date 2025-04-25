<?php
require "db_config.php";

$sql = "CREATE TABLE IF NOT EXISTS posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    body TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "✅ Table 'posts' created!";
} else {
    echo "❌ Error: " . $conn->error;
}
$conn->close();
?>
