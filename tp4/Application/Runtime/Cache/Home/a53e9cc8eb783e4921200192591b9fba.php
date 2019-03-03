<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo U('showAdd');?>" method="post">
		爱好：
		<input type="checkbox" name="likes[]" value="1">上网
		<input type="checkbox" name="likes[]" value="2">睡觉
		<input type="checkbox" name="likes[]" value="3">玩
		<input type="checkbox" name="likes[]" value="6">敲代码
		<input type="submit" value="提交">
	</form>
</body>
</html>