<?php
if (isset($_COOKIE["username"])) {
    echo "👤 Cookie says: " . $_COOKIE["username"];
} else {
    echo "⚠️ Cookie not found.";
}
?>
