<!DOCTYPE html>
<?php
session_start();
if (isset($_SESSION["error"])) {
    echo "<p style = 'color:red'>".$_SESSION["error"]."</p>";
    unset($_SESSION["error"]);
}
?>
<html>
<head>
    <title>JavaScript</title>

    <script type="text/javascript" src="script.js"></script>
</head>
<body>
<button onclick="changeBackground()">Change Background</button>
<h1>Login</h1>
<p>Please enter information to login</p>
<form method = "post" action = "checkLogin.php">
    <h2>User information</h2>
    <label>E-mail: </label><input type = "text" name = "email"><br>
    <label>Password: </label><input type = "password" name = "password"><br>
    <p><input type = "submit" value = "Login" name = "submit"></p>
</form>
</body>
</html>