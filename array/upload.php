<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title多文件上传</title>
</head>
<body>
<form class="" action="#" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" value=""> <br>
        <input type="file" name="files[]" value=""> <br>
        <input type="file" name="files[]" value=""> <br>
        <input type="submit" name="name" value="上传">

</form>
<?php 
echo "<pre>";
print_r($_FILES);
echo "<pre/>";
?>
	
</body>
</html>