<?php
if (isset($_POST['submit'])) {
    if (!$_POST['id'] || $_POST['id'] < 0) {
        header('Location: 7.php?msg=invalid-user-id');
    }
    if (!($_POST['photo'])) {
        header('Location: 7.php?msg=image-required');
    } else {
        header('Location: 7.php?status=success');
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
    <form action="7.php" method="POST">
        <fieldset>
            <legend>Profile Picture</legend>
            User ID <input type="text" name="id" /> <br />
            Picture<input type="file" value="browse" name="photo" />
            <br />
            <hr />
            <input type="submit" name="submit" value="submit" /> <br />
        </fieldset>
    </form>
</body>

</html>