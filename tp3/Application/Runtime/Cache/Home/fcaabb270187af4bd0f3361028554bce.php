<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('add');?>" method="post" enctype="multipart/form-data">
		姓名：<input type="text" name="users"><br>
		货号：<input type="text" name="hh"><br>
		<input type="file" name="files"><br>
		<button>提交</button>

	</form>
	
</body>
</html>