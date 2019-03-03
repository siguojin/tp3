<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
	

<body>
<table border="1px" cellspacing="0">
	<form action="<?php echo U('bdd');?>" method="post" enctype="multipart/form-data">
	账号：<input type="text" name="user"><br>
	密码：<input type="text" name="psd"><br>
	头像：<input type="file" name="files">
		<button>提交</button>

	</form>
</table>
	
</body>
</html>