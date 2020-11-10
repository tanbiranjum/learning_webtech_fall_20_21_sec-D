<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_SESSION['username'])) {
        header("Location: ./views/profile.php");
    } else {
        echo "<div>
        <h1>Welcome to the Site!</h1>
        <ul>
            <li> <a href=\"views/login.php\">Login</a> </li>
            <li><a href=\"views/registration.php\">Registration</a></li>
        </ul>
    </div>";
    }
    ?>
</body>

</html>

<style>
    div {
        height: 200px;
        width: 600px;
        margin: 0 auto;
        margin-top: 100px;
        border: 1px solid black;
    }

    h1 {
        text-align: center;
    }
</style>