<?php

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $pwd = $_POST['pwd'];

    if (loginValidator($id, $pwd)) {
        session_start();
        $_SESSION['userId'] = $id;
        session_start();
        $_SESSION['userId'] = $id;
        if ($_COOKIE['user-type'] === "Admin") {
            header("Location: admin_home.php?status=success");
        } elseif ($_COOKIE['user-type'] === "User") {
            header("Location: user_home.php?status=success");
        }
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
            $type = explode("|", $line)[3];
            fclose($file);
            setcookie('user-type', $type, time() + 3600, "/");
            return true;
        }
    }
    fclose($file);
    return false;
}
