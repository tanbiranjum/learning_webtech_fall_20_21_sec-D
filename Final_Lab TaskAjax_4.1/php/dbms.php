<?php
$connection = mysqli_connect('localhost', 'root', '', 'webtech');

if (isset($_REQUEST['submit'])) {
    $id = $_SERVER['id'];
    $password = $_SERVER['password'];
    $name = $_SERVER['name'];
    $email = $_SERVER['email'];
    $type = $_SERVER['type'];
}





function registerUser($id, $password, $name, $email, $type) {
    $sql = 'INSERT INTO '
}