<?php include("connectDB.php"); ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <form action="launching.php" method="post">
    團購標題： <input type="text" name="title"><br>
    聯絡電話： <input type="text" name="phone"><br>
    交貨方式： <input type="radio" name="location" value="直寄">
  </form>
</body>
</html>