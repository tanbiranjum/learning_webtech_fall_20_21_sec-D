<?php

if (isset($_GET['submit'])) {
    $gender = $_GET['gender'];
    echo "Selected gender: " . $gender;
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
    <form method="get" action="4.php">
        <fieldset style="width: 200px">
            <legend>GENDER</legend>
            <input type="radio" name="gender" value="Male" /> Male
            <input type="radio" name="gender" value="Female" /> Female
            <input type="radio" name="gender" value="Other" /> Other <br />
        </fieldset>
        <br />
        <input type="submit" value="submit" name="submit" />
    </form>
</body>

</html>