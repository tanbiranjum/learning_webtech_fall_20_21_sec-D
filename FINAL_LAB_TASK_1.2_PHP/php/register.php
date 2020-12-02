<?php
$connection = mysqli_connect('localhost', 'root', '', 'webtech');

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $name = $_POST['name'];
    $contactNo = $_POST['contact-no'];
    $password = $_POST['password'];

    $query = "INSERT INTO employee(employee_name, employee_username, employee_contactno, employee_password) VALUES ('$name', '$username', '$contactNo', '$password')";

    echo $query;

    try {
        $result = mysqli_query($connection, $query);
        if ($result) {
            header('Location: ../index.php?status=success');
        } else {
            header('Location: ../index.php?status=error');
        }
    } catch (Exception $e) {
        header('Location: ../index.php?status=error');
    }
} elseif ($_REQUEST['search']) {
    $username = $_POST['username'];

    $query = "SELECT * FROM employee WHERE employee_username = '$username'";

    $result = mysqli_query($connection, $query);

    while ($row = $mysqli_fetch_assoc) {
        $name = $row['employee_name'];
        $contactNo = $row['employee_contactno'];
        $password = $row['employee_password'];
    }
}
