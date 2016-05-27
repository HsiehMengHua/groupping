<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="css/bootstrap-material-datetimepicker.css">
</head>
<body>
  <form action="launching.php" method="post" enctype="multipart/form-data">
    *團購標題： <input type="text" name="title"><br>
    *商品類別： <select name="category">
    			<option selected disabled></option>
                <option name="category" value="熱銷美食">熱銷美食</option>
                <option name="category" value="服飾鞋包">服飾鞋包</option>
                <option name="category" value="美妝保養">美妝保養</option>
                <option name="category" value="生活雜貨">生活雜貨</option>
                <option name="category" value="休閒娛樂">休閒娛樂</option>
             </select><br>
    商品連結： <input type="text" name="link"><br>
    聯絡電話： <input type="text" name="phone"><br>
    交貨方式： <label><input type="checkbox" name="location[]" value="直寄">直寄</label>
    		 <label><input type="checkbox" name="location[]" value="郵寄">郵寄</label>
             <label><input type="checkbox" name="location[]" value="便利商店寄件">便利商店寄件</label>
             <label><input type="checkbox" name="location[]" value="面交">面交</label><br>
    截止時間： <input type="text" id="datetimepicker" name="deadline"><br>
    成團條件： <label><input type="radio" name="target" value="none">不設定</label>
    		 <label><input type="radio" name="target" value="dollar">
             	<input type="number" name="dollar" min="1">元
             </label>
             <label><input type="radio" name="target" value="quantity">
             	<input type="number" name="quantity" min="1">份
             </label><br>
    商品單價： $ <input type="number" name="price" min="1"> 起<br>
    圖片上傳： <input type="file" name="imageUpload[]" multiple><br>
    團購說明：<br><textarea name="description" cols="30" rows="10"></textarea><br>
    <input type="submit">
  </form>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://momentjs.com/downloads/moment.min.js"></script> <!-- 有.js 跟 .min.js 在local資料夾 -->
  <script src="js/bootstrap-material-datetimepicker.js"></script>
  <script>
	  $(function() {
		$('#datetimepicker').bootstrapMaterialDatePicker({ format : 'YYYY-MM-DD HH:mm', minDate : new Date() });
	  });
  </script>
</body>
</html>