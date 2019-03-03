<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('bdd');?>" method="post" enctype="multipart/form-data">
		账号：<input type="text" name="user"><br>
		密码：<input type="text" name="psd"><br>
		头像：<input type="file" name="files"><br>
		<select name="" id="sheng">
			<option value="请输入您的省">请输入您的省</option>
		</select>
		<select name="" id="shi">
			<option value="请输入您的市">请输入您的市</option>
		</select>
		<select name="" id="sheng">
			<option value="请输入您的县">请输入您的县</option>
		</select>
	<button>提交</button>
	</form>
</body>
</html>