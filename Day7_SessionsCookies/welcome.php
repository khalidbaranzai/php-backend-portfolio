<?php
session_start();

if (isset($_SESSION["username"])) {
    echo "Welcome " . $_SESSION["username"];
} else {
    echo "⚠️ No session data found.";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button><a href="session_destroy.php">Logout</a></button>
    
</body>
</html>