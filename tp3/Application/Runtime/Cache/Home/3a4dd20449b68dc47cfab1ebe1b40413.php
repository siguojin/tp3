<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('insert');?>" method="post" enctype="multipart/form-data">
	商品名称：<input type="text" name="user"><br>
	货号：<input type="text" name="huohao" ><br>
	<input type="file" name="files">
	<button>提交</button>
	</form>

	
</body>
</html>