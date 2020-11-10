<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $uname = $_POST['uname'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $gender = $_POST['gender'];
    $bDate = $_POST['day'];
    $bMonth = $_POST['month'];
    $bYear = $_POST['year'];

    $dataString = $uname . "|" . $name . "|" . $email . "|" . $gender . "|" . $password . "|" . $bDate . "-" . $bMonth . "-" . "$bYear";

    $file = fopen('../assets/user.txt', 'w');
    fwrite($file, $dataString);
    fclose($file);

    header("location: ../views/registration.php?status=success");
    echo "success";
} else {
    header("location: ../views/registration.php");
}
