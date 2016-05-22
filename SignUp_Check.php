<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>紫電o黷武</title>
</head>

<body>
<?php
include("connectDB.php");

//讀值
$email = str_replace(" ", "", $_POST["email"]);
$password = str_replace(" ", "", $_POST["password"]);
$name = input($_POST["name"]);
$userName = input($_POST["userName"]);
$phoneNumber = input($_POST["phone"]);

$err = false;

//未輸入或字數超過 echo 錯誤訊息
if(empty($email)){
	echo "Email is required"."<br>";
	$err=true;
}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	echo "Invalid email address"."<br>";
	$err=true;
}

if(empty($password)){
	echo "Password is required"."<br>";
	$err=true;
}else if(strlen($password)>20){
	echo "The password should be no more than 20 characters.";
	$err=true;
}

if(empty($name)){
	echo "Name is required"."<br>";
	$err=true;
}else if(strlen($_POST["name"])>8){
	echo "Please type in your true name.";
	$err=true;
}

if(strlen($userName)>30){
	echo "User name exceeds the limited length."."<br>";
	$err=true;
}

if(strlen($phone)>10){
	echo "Invalid phone number format"."<br>";
	$err=true;
}

if($err){
	echo '<input type="button" value="Back" onClick="history.back()">';
}else{
	$sql_checkDup = "SELECT * FROM `user` WHERE `email` = '$email'";
	$result = $conn->query($sql_checkDup);
	
	//email沒註冊過
	if($result){
		$sql_insert = "INSERT INTO `user`(`email`, `password`, `name`, `userName`, `phone`) 
						VALUES ('$email', '$password', '$name', '$userName', '$phoneNumber')";
		if ($conn->query($sql_insert) === TRUE) {
    		echo "New record created successfully"."<br>";
		} else {
    		echo "Error: ".$sql."<br>".$conn->error;
		}
		echo '<form action="Index.php"><input type="submit" value="Home"></form>';
	}else{		//email被註冊過
		echo "The email has been registered."."<br>";
		echo '<input type="button" value="Back" onClick="history.back()">';
	}
}

function input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

</body>
</html>