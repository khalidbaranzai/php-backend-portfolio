<?php
session_start();

if (isset($_SESSION["username"])) {
    echo "👋 Welcome, " . $_SESSION["username"] . "<br>";
    echo "📧 Email: " . $_SESSION["email"];
} else {
    echo "⚠️ No session data found.";
}
?>
