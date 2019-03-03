<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('insert');?>" method="post">
	<table>
	姓名：<input type="text" name="user"><br>
	密码：<input type="text" name="psd"><br>
	 <button>提交</button>
	</table>

	</form>


</body>
</html>