<?php

if (isset($_GET['submit'])) {
    if (!$_GET['bloodGroup']) {
        echo "Sorry you selected nothing!";
    } else {
        echo "You selected:" . $_GET['bloodGroup'];
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <form method="GET" action="6.php">
        <fieldset>
            <legend>BLOOD GROUP</legend>
            <select name="bloodGroup">
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+" selected>O+</option>
                <option value="O-">O-</option>
            </select>
            <hr />

            <input type="submit" value="Submit" name="submit" />
        </fieldset>
        <br />
    </form>
</body>

</html>