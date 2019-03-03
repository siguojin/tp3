<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('cdd');?>" method="post">
		账号：<input type="text" name="user"><br>
		密码：<input type="text" name="names"><br>
		<button>提交</button>
	</form>
</body>
</html>