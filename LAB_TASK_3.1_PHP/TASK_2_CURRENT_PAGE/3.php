<?php

if (isset($_GET['submit'])) {
    $dateOfBirth = $_GET['day'] . " /" . $_GET['month'] . " /" . $_GET['year'];
    echo "Date of birth is: " . $dateOfBirth;
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
    <form method="get" action="3.php">
        <fieldset>
            <legend>DATE OF BIRTH</legend>
            <pre>  dd      mm     yyyy</pre>
            <input type="tel" name="day" size="1" /> /
            <input type="tel" name="month" size="1" /> /
            <input type="tel" name="year" size="2" />
            <hr />
            <input type="submit" value="Submit" name="submit" />
        </fieldset>
    </form>
</body>

</html>