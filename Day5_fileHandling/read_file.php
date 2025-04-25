<?php
$file = "data.txt";

if (file_exists($file)) {
    $content = file_get_contents($file);
    echo "<pre>$content</pre>";
} else {
    echo "⚠️ File does not exist.";
}
?>
