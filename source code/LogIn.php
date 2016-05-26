<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Project</title>
</head>

<body>

<?php
include("connectDB.php");
?>

<div>
	<form method="post" action="LogIn_Check.php">
    Email<br><input type="text" name="email"><br>
    Password<br><input type="password" name="password"><br>
    <input type="submit" value="Log In">
    </form>
</div>
</body>
</html>