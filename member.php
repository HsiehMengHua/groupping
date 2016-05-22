<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>紫凜o楓鴦</title>
</head>

<body>
<?php
if($_SESSION["email"] != null){
	echo "member.php";
	echo '<a href="LogOut.php"><button type="button">Log Out</button></a>';
}else{
	echo "無權限";
}
?>
</body>
</html>