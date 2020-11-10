<?php

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    $file = fopen('../assets/user.txt', 'r');
    while (!feof($file)) {
        $line = fgets($file);
        $username = explode("|", $line)[0];
        if ($username === $username) {
            $name = explode("|", $line)[1];
            $email = explode("|", $line)[2];
            $gender = explode("|", $line)[3];
            $dob = explode("|", $line)[5];
            break;
        }
    }

    fclose($file);
} else {
    header("Location: ../index.php");
}
