<?php
session_start();
if (!isset($_SESSION["logged_in"])) {
    header("Location: login.php");
    exit;
}
require "db_config.php";

$id = $_GET["id"];
$conn->query("DELETE FROM posts WHERE id = $id");

header("Location: index.php");
?>
