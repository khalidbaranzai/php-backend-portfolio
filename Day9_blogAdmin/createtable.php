<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "testdb";

// Connect WITH database
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "✅ Table 'users' created successfully!";
} else {
    echo "❌ Error creating table: " . $conn->error;
}

$conn->close();
?>
