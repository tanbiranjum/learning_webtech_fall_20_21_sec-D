<?php

if (isset($_GET['submit'])) {
    $items = $_GET['degree'];
    echo "You have selected: ";
    foreach ($items as $item) {
        echo $item . " ";
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
    <form method="GET" action="5.php">
        <fieldset>
            <legend>DEGREE</legend>
            <input type="checkbox" name="degree[]" value="SSC" /> SSC
            <input type="checkbox" name="degree[]" value="HSC" /> HSC
            <input type="checkbox" name="degree[]" value="Bsc" /> Bsc
            <input type="checkbox" name="degree[]" value="Msc" /> Msc
            <hr />
            <input type="submit" value="submit" name="submit" />
        </fieldset>
    </form>
</body>

</html>