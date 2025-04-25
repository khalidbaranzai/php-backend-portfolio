<?php
require "db_config.php";

$sql = "CREATE DATABASE IF NOT EXISTS testdb";
if ($conn->query($sql) === TRUE) {
    echo "✅ Database 'testdb' created successfully!";
} else {
    echo "❌ Error creating database: " . $conn->error;
}

$conn->close();
?>
