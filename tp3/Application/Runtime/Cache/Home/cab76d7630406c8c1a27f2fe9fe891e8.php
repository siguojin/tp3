<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('upload');?>" method="post">
			<input type="hidden" name="id" value="<?php echo ($info["id"]); ?>">
		角色名：<input type="text" name="user" value="<?php echo ($info["user"]); ?>"><br>
		<button>修改</button>
	</form>
	
</body>
</html>