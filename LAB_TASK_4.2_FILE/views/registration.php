<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <table border="1" width="40%" height="600px" align="center">
        <?php
        include_once("header.php");
        ?>
        <tr>
            <td>
                <form action="../php/registration.inc.php" method="post">

                    <fieldset>
                        <legend><b>REGISTRATION</b></legend>

                        <br><br>
                        <b>Name</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" name="name">
                        <hr>
                        <b>Email</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="email" name="email">
                        <button title="hint:Sample@example.com"><b>i</b></button>
                        <hr>
                        <b>User Name</b>&nbsp;:<input type="text" name="uname">
                        <hr>
                        <b>Password</b>&nbsp;&nbsp;&nbsp;&nbsp;:<input type="password" name="password">
                        <hr>
                        <b>Confirm Password</b>:<input type="password" name="cpassword">
                        <hr>

                        <fieldset>

                            <legend><b>Gender</b></legend>

                            <input type="radio" name="gender" value="Male"> <b>Male</b>
                            <input type="radio" name="gender" value="Female"> <b>Female</b>
                            <input type="radio" name="gender" value="Other"> <b>Other</b>

                        </fieldset>
                        <hr>

                        <fieldset>

                            <legend><b>Date of Birth</b></legend>

                            <input type="tel" name="day" size="1" pattern="[0-9]{2}"><b> /</b>
                            <input type="tel" name="month" size="1" pattern="[0-9]{2}"><b> /</b>
                            <input type="tel" name="year" size="2" pattern="[0-9]{4}"> (dd/mm/yyyy)

                        </fieldset>
                        <hr>

                        <input type="submit" name="submit" value="Submit">
                        <input type="reset" name="reset" value="reset">

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