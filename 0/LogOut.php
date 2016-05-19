<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>紫凜o楓鴦</title>
</head>

<body>
<?php
unset($_SESSION["email"]);
echo "Loging Out";
echo '<meta http-equiv=REFRESH CONTENT=1;url=Index.php>';
?>
</body>
</html>