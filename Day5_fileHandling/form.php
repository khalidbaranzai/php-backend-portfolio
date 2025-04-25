<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" placeholder="Enter your name">

        <label for="feedback">Feedback:</label>
        <textarea name="feedback" id=""></textarea>
        <!-- <input type="text" name="feedback" placeholder="Enter your feedback"> -->

        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>


<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $feedback = $_POST['feedback'];

    // Write to the file
    $file = fopen('feedback.txt', 'a');
    if ($file) {
        fwrite($file, "Name: $name\nFeedback: $feedback\n\n");
        fclose($file);
    }
}

?>




