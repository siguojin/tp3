<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo u(index2);?>" method="post">
	姓名:<input type="text" name="name">
	性别:<input type="radio" name="sex" value="男">男
	     <input type="radio" name="sex" value="女">女
	年龄:<input type="text" name="age">
	家庭住址:<input type="text" name="address">
	<input type="submit" value="提交">
	</form>
</body>
</html>