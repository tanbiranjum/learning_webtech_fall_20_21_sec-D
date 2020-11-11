<?php

if (isset($_SESSION['userId'])) {
    $id = $_SESSION['userId'];
    $file = fopen('user.txt', 'r');

    while (!feof($file)) {
        $line = fgets($file);
        $userId = explode("|", $line)[0];
        if ($id === $userId) {
            $name = explode("|", $line)[1];
            $type = explode("|", $line)[3];
            break;
        }
    }
    fclose($file);
} else {
    header("Location: login.php");
}
