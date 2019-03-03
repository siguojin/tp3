<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('update');?>" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo ($info["id"]); ?>">
		姓名：<input type="text" name="users" value="<?php echo ($info["users"]); ?>"><br>
		货号：<input type="text" name="hh" value="<?php echo ($info["hh"]); ?>"><br>
	
		<button>提交</button>

	</form>
	
</body>
</html>