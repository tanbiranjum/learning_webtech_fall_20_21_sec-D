<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHANGE Password</title>
</head>

<body>
    <form action="">
        <fieldset>
            <legend>CHANGE PASSWORD</legend>
            <label for="currentpwd">Password</label>
            <input type="password" name="currentpwd" id="pwd1">
            <label for="newpwd">Password</label>
            <input type="password" name="newpwd" id="pwd2">
            <label for="confirmpwd">Password</label>
            <input type="password" name="confirmpwd" id="pwd3">
            <hr>
            <button type="submit">Change</button>
            <a href="home.html">Home</a>
        </fieldset>
    </form>
    <script src="../asset/js/forgetpwd.js"></script>
</body>

</html>

<style>
    label {
        display: block;
    }

    form {
        width: 20%;
        margin: 0 auto;
    }
</style>