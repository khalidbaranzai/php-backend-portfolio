<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button type="submit" name="submit">Login</button>

    </form>
    




    <?php
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == "Khalid" && $password == "123") {
            session_start();
            $_SESSION['username'] = $username;
            header("Location: welcome.php");

        }

    }


    ?>





</body>
</html>