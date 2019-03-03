<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('bdd');?>" enctype="multipart/form-data" method="post" >
		<table>
				分类名：<input type="text" name="fl"><br>
				头像：<input type="file" name="files"><br>
				<button>上交</button>
		</table>

	</form>
	
</body>
</html>