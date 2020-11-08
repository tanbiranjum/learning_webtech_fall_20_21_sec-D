<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to our home page</title>
</head>

<body>
    <table border="1" width="60%" height="400px" align="center">
        <?php
        include_once("header.php");
        ?>
        <tr>
            <td>
                <form action="forgot_password.php" method="post">

                    <fieldset>

                        <legend><b>FORGOT PASSWORD</b></legend>

                        Enter Email&nbsp;:&nbsp;<input type="email" name="email">
                        <hr>
                        <input type="submit" name="submit" value="Submit"><br><br>

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