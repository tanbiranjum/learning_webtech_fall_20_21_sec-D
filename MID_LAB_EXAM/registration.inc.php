<?php

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $pwd = $_POST['pwd'];
    $cPwd = $_POST['cpwd'];
    $user = $_POST['type'];

    if (passwordValidator($pwd, $cPwd)) {
        $string = $id . "|" . "$name" . "|" . $pwd . "|" . "$user" . "\n";
        $file = fopen('user.txt', 'a');
        fwrite($file, $string);
        fclose($file);
        session_start();
        $_SESSION['userId'] = $id;
        header("Location: index.php?status=success");
    } else {
        header("Location: registration.php?status=password-didn't-matched");
    }
} else {
    header("Location: registration.php");
}



function passwordValidator($password, $cPassword)
{
    if ($password === $cPassword) {
        return true;
    }
    return false;
}
