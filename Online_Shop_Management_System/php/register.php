<?php
$connection = mysqli_connect('localhost', 'root', '', 'webtech');



if(isset($_REQUEST['submit'])) {
    $username = $_REQUEST['username'];
    $name = $_REQUEST['name'];
    $contactNo = $_REQUEST['contact-no'];
    $password = $_REQUEST['password'];
}
$query = 'INSERT INTO '