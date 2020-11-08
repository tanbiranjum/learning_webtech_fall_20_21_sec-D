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
                <b>Account</b>
                <hr>

                <ul>

                    <a href="dashboard.php">
                        <li>Dashboard</li>
                    </a>
                    <a href="profile.php">
                        <li>View Profile</li>
                    </a>
                    <a href="edit_profile.php">
                        <li>Edit Profile</li>
                    </a>
                    <a href="profile_picture.php">
                        <li>Change Profile Picture</li>
                    </a>
                    <a href="change_password.php">
                        <li>Change Password</li>
                    </a>
                    <a href="logout.php">
                        <li>Logout</li>
                    </a>

                </ul>


            </td>

            <td width=80%>
                <h3><b>Welcome, <u>Tanbir</u></b></h3>
            </td>

        </tr>
        <?php
        include_once("footer.php");
        ?>
    </table>
</body>

</html>