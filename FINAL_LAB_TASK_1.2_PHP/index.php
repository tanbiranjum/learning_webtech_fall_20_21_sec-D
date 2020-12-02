<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./php/register.php" method="post">
        <fieldset>
            <?php
            if (isset($_GET['status'])) {
                if ($_GET['status'] == 'error') {
                    echo "Registration Failed";
                } else {
                    echo "Registration Done";
                }
            }
            ?>
            <legend>Register</legend>
            <label for="username">Username</label>
            <input type="text" name="username">
            <label for="name">Name</label>
            <input type="text" name="name">
            <label for="contact-no">Contact No</label>
            <input type="text" name="contact-no">
            <label for="password">Password</label>
            <input type="password" name="password">
            <hr>
            <button type="submit" name="submit">Submit</button>
        </fieldset>
    </form>
</body>

</html>

<style>
    label,
    input {
        display: block;
    }
</style>