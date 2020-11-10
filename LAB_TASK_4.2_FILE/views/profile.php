<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
include_once("../php/profile.inc.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h1>Welcome <?php echo $name ?></h1>
        <p>Username: <?php echo $username ?></p>
        <p>Email: <?php echo $email ?></p>
        <p>Date of birth: <?php echo $dob ?></p>
        <p>Gender: <?php echo $gender ?></p>
        <a href="../php/logout.inc.php">Logout</a>
    </div>
</body>

</html>

<style>
    div {
        border: 1px solid black;
        padding: 10px;
        width: 50%;
        margin: 0 auto;
        margin-top: 50px;
    }

    h1 {
        text-align: center;
    }
</style>