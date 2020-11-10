<?php

if (isset($_POST['submit'])) {
    echo "I am also here";
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (loginValidator($username, $password)) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: ../views/profile.php?status=success");
    } else {
        header("Location: ../views/login.php?error=invalid-credential");
    }
} else {
    echo header("Location: ../views/login.php");
}


function loginValidator($givenUsername, $givenPwd)
{
    $file = fopen('../assets/user.txt', 'r');
    while (!feof($file)) {
        $line = fgets($file);
        $username = explode("|", $line)[0];
        $password = explode("|", $line)[4];
        if ($givenUsername === $username && $givenPwd === $password) {
            fclose($file);
            return true;
        }
    }
    fclose($file);
    return false;
}
