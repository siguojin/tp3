<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('add');?>" method="post" enctype="multipart/form-data">
		内容：<input type="text" name="user"><br>
		用户名：<input type="text" name="names"><br>
		头像：<input type="file" name="files"><br>
		<button>提交</button>
	</form>

	
</body>
</html>