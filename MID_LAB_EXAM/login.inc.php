<?php

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $pwd = $_POST['pwd'];

    if (loginValidator($id, $pwd)) {
        session_start();
        $_SESSION['userId'] = $id;
        session_start();
        $_SESSION['userId'] = $id;
        header("Location: profile.php?status=success");
    } else {
        header("Location: login.php?error=invalid-credential");
    }
} else {
    header("Location: login.php");
}



function loginValidator($givenId, $givenPwd)
{
    $file = fopen('user.txt', 'r');
    while (!feof($file)) {
        $line = fgets($file);
        $id = explode("|", $line)[0];
        $password = explode("|", $line)[2];
        if ($givenId === $id && $givenPwd === $password) {
            fclose($file);
            return true;
        }
    }
    fclose($file);
    return false;
}
