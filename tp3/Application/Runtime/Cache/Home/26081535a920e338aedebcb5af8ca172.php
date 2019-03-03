<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form action="<?php echo U(update2);?>" method="post">
	<input type="hidden" name="id" value="<?php echo ($info["rid"]); ?>">
	<input type="text" name="role_name" value="<?php echo ($info["role_name"]); ?>">
	<button> 修改</button>
	

	</form>
	
</body>
</html>