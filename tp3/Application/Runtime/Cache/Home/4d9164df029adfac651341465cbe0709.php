<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('edd');?>" method="post"  enctype="multipart/form-data"> 

	头像：<input type="file" name="files[]"><br>
	<span id="cd"></span>
	<input type="submit" >
	</form>
	<input type="button" value="在来一条" onclick="qw()">



</body>
</html>
<script src="/Public/jquery.js"></script>
<script>
	function qw(){
		var t='	头像：<input type="file" name="files[]"><br>';
		$("#cd").append(t);


	}

</script>