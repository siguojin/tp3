<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('photos');?>" enctype="multipart/form-data" method="post" >
		<table>
				头像：<input type="file" name="files"><br>
				<button>上交</button>
		</table>

	</form>
	
</body>
</html>