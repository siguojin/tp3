<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('update1');?>" method="post">
	<table>
		<input type="hidden" name="id" value="<?php echo ($info["id"]); ?>">
	姓名：<input type="text" name="user" value="<?php echo ($info["user"]); ?>"><br>
	密码：<input type="text" name="psd" value="<?php echo ($info["password"]); ?>"><br>
	 <button>修改</button>
	</table>

	</form>


</body>
</html>