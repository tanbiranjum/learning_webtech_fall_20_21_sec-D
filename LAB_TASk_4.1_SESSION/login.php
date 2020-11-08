<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>

<body>
    <table border="1" width="60%" height="400px" align="center">
        <?php
        include_once("header.php");
        ?>
        <tr>
            <td>
                <form action="login.php" method="post">

                    <fieldset>

                        <legend><b>LOGIN</b></legend>

                        User Name&nbsp;:&nbsp;<input type="text" name="uname"><br><br>
                        Password&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<input type="password" name="password">
                        <hr>
                        <input type="checkbox" name="remember_me" value="1"> <b>Remember Me</b><br><br>
                        <input type="submit" name="submit" value="Submit"> <a href="forgot_password.php">Forgot Password</a>

                    </fieldset>

                </form>
            </td>
        </tr>
        <?php
        include_once("footer.php");
        ?>
    </table>
</body>

</html>
