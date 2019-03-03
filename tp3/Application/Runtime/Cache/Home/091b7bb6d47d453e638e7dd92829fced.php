<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('user');?>" method="post">
         用户:<input type="text" name="username">
         密码:<input type="text" name="pwd">
         <input type="submit" value="提交">
	</form>
</body>
</html>