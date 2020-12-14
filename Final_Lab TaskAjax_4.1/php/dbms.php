<?php
$connection = mysqli_connect('localhost', 'root', '', 'webtech');

if (isset($_REQUEST['submit'])) {
    $id = $_SERVER['id'];
    $password = $_SERVER['password'];
    $name = $_SERVER['name'];
    $email = $_SERVER['email'];
    $type = $_SERVER['type'];

    registerUser($id, $password, $name, $email, $type, $connection);
}





function registerUser($id, $password, $name, $email, $type, $connection)
{
    $sql = "INSERT INTO users (id, pwd, name, email, type) VALUES($id, $password, $name, $email, $type)";
    try {
        $result = mysqli_query($connection, $sql);
        if ($result) {
            header('Location: ../view/login.php?status=success');
        } else {
            header('Location: ../index.php?status=error');
        }
    } catch (Exception $e) {
        header('Location: ../index.php?status=error');
    }
}

function loginUser($id, $password, $connection)
{
    $sql = "SELECT id FROM users WHERE id = $id AND pwd = $password";

    try {
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if ($count == 1) {
            header("location: ../view/home.php");
        } else {
            header("location: ../view/login.php");
        }
    } catch (Exception $e) {
        echo $e;
    }
}
