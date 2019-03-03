<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo U('shopAdd');?>" method="post" enctype="multipart/form-data">
		商品名称：<input type="text" name="shop_name">
		商品货号： <input type="text" name="shop_number">
		商品图片： <input type="file" name="files">
		<input type="submit" value="提交">
	</form>
</body>
</html>