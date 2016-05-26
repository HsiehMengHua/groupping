<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>紫凜o楓鴦</title>
</head>

<body>

<?php include("connectDB.php"); ?>

<div>
        <form method="post" action="SignUp_Check.php">
        帳號<br><input type="text" name="id"><br>
        使用者暱稱<br><input type="text" name="userName"><br>
        Email<br><input type="text" name="email"><br>
        Password<br><input type="password" name="password"><br>
        Phone Number<br><input type="text" name="phone"><br><br>
        <input type="submit" value="Sign Up">
        <input type="button" onclick="history.back()" value="Back">
        </form>
</div>
</body>
</html>