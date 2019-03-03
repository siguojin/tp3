<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('upload');?>" method="post">
		<table>
			<input type="hidden" name="id" value="<?php echo ($info["id"]); ?>">
		账号：<input type="text" name="user" id="user" value="<?php echo ($info["role_name"]); ?>"><br>
		密码：<input type="text" name="psd" id="psd" value="<?php echo ($info["psd"]); ?>"><br>
			<button>修改</button>
		</table>

	</form>

	
</body>
</html>