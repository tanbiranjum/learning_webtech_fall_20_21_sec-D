<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="../php/login.inc.php" method="post">
        <div>
            <h4>Login here...</h4>
            <label for="username">Username</label>
            <input type="text" name="username">
            <label for="password">Password</label>
            <input type="password" name="password">
            <button type="submit" name="submit">Submit</button>
            <?php if (isset($_GET['error'])) {
                echo "Invalid username or password";
            }
            ?>
        </div>
    </form>
</body>

</html>

<style>
    h4 {
        text-align: center;
    }

    label,
    input,
    button {
        display: block;
        padding: 2px;
    }

    div {
        border: 1px solid black;
        height: 300px;
        width: 400px;
        padding: 40px;
        margin: 0 auto;
        margin-top: 50px;
    }
</style>