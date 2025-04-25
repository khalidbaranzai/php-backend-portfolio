<?php
$file = "data.txt";

// 'w' mode = write (overwrite if exists)
$handle = fopen($file, "w");

$text = "Hello Khalid, this file was created using PHP on Day 5!\n";
fwrite($handle, $text);

fclose($handle);
echo "✅ File written successfully!";
?>
