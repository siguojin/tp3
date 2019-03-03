<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('show_insert');?>" method="post" enctype="multipart/form-data">
		<table>
			姓名：<input type="text" name="user"><br>
			密码：<input type="text" name="psd"><br>
			年龄：<input type="text" name="age"><br>
			手机号：<input type="text" name="phon"><br>
			头像：<input type="file" name="files"><br>
			<button>提交</button>
		</table>

	</form>
	
</body>
</html>