<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('duo');?>" enctype="multipart/form-data" method="post" >
		头像：<input type="file" name="files[]"><br>
		<span id="cd"></span>
		<button>提交</button>

	</form>
	<input type="button" onclick="qw()" value="增加一条">
</body>
</html>
<script src="/Public/jquery.js"></script>
<script>
	function qw(){
		var str='头像：<input type="file" name="files[]"><br>';
		$("#cd").append(str);

	}


</script>