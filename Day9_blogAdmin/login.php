<?php
session_start();

$USERNAME = "admin";
$PASSWORD = "1234"; // You can hash this later

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = $_POST["username"];
    $pass = $_POST["password"];

    if ($user === $USERNAME && $pass === $PASSWORD) {
        $_SESSION["logged_in"] = true;
        header("Location: create_post.php");
    } else {
        echo "❌ Invalid credentials!";
    }
}
?>

<h2>🔐 Admin Login</h2>
<form method="POST">
    <input type="text" name="username" placeholder="Username"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <button type="submit">Login</button>
</form>
