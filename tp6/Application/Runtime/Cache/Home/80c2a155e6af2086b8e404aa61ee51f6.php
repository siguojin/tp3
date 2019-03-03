<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U(upload);?>" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo ($info["cid"]); ?>">
		姓名：<input type="text" name="user" value="<?php echo ($info["user"]); ?>"><br>
		分类：<input type="text" name="csd" value="<?php echo ($info["csd"]); ?>"><br>
		权限：<input type="text" name="phon" value="<?php echo ($info["phon"]); ?>"><br>
		头像：<input type="file" name="files" value="<?php echo ($info["files"]); ?>">
		<button>提交</button>

	</form>
	
</body>
</html>