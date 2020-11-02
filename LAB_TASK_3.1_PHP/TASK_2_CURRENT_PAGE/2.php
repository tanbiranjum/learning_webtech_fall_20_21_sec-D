<?php

if (isset($_GET['submit'])) {
    $email = $_GET['email'];
    echo "Your email: " . $email;
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
    <form method="get" action="2.php">
        <fieldset>
            <legend>EMAIL</legend>
            <input type="email" name="email" />
            <button title="hint:Sample@example.com">i</button>
            <hr />
            <input type="submit" name="submit" value="submit" />
        </fieldset>
    </form>
</body>

</html>