<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to our home page</title>
</head>

<body>
    <table border="1" width="50%" height="400px" align="center">
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
                <fieldset>
                    <legend><b>PROFILE</b></legend>
                    <table>

                        <tr>
                            <td>




                                Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:name
                                <hr>
                                Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:name
                                <hr>
                                Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:name
                                <hr>
                                Date of Birth: date




                            </td>



                            <td>
                                <img src="img/user.png" alt="User" height="150px" width="150px"><br>
                                <a href="profile_picture.php">Change</a>

                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><a href="edit_profile.php">Edit Profile</a></td>
                        </tr>
                    </table>
                </fieldset>

            </td>

        </tr>
        <?php
        include_once("footer.php");
        ?>
    </table>
</body>

</html>