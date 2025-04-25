<?php
$file = "data.txt";

$handle = fopen($file, "a"); // append mode
$additionalText = "Appended on " . date("Y-m-d H:i:s") . "\n";
fwrite($handle, $additionalText);

fclose($handle);
echo "✅ New content appended!";
?>
