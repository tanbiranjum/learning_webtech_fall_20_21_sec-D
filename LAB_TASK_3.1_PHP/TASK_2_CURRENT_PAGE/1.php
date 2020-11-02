<?php
if (isset($_GET['submit'])) {
    echo "Your name is: " . $_GET['name'];
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
    <form action="1.php" method="get">
        <fieldset>
            <legend>Name</legend>
            Name <br />
            <input type="text" name="name" /> <br />
            <hr />
            <button type="submit" name="submit">Submit</button>
        </fieldset>
    </form>
</body>

</html>