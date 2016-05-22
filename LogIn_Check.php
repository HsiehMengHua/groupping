<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Project</title>
</head>

<body>
<?php
include("connectDB.php");

//讀值
$email = str_replace(" ", "", $_POST["email"]);
$password = str_replace(" ", "", $_POST["password"]);

//驗證帳號密碼
$sql = "SELECT * FROM `user` WHERE `email`='$email' and `password` = '$password'";
$result = $conn->query($sql);
// echo "num_rows = ".$result_checkPasswordCorrect->num_rows."<br>";

/*登入成功*/
if($result->num_rows){
	$_SESSION["email"] = $email;
	echo "Log in successfully"."<br>";
	echo '<form action="Index.php"><input type="submit" value="Home"></form>';
	echo '<meta http-equiv=REFRESH CONTENT=1;url=member.php>';	// redirect to "member.php"
}

/*登入失敗*/
else{
	echo "Email or password is wrong"."<br>";
	echo '<input type="button" onClick="history.back()" value="Back">';
}
?>
</body>
</html>