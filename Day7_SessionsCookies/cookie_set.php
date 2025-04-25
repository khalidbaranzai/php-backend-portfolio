<?php
$cookie_name = "username";
$cookie_value = "KhalidCookie";
setcookie($cookie_name, $cookie_value, time() + (86400 * 7), "/"); // 7 days

echo "🍪 Cookie is set!";
?>
