<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('cdd');?>" method="post" >
		账号：<input type="text" name="user[]"><br>
		密码：<input type="text" name="psd[]"><br>
		<span id=cd></span>
		<button>修改</button>
	</form>
	<input type="button" onclick="cd()" value="新增一条">
</body>
</html>
<script src="/Public/jquery.js"></script>
<script>
	function cd(){
		var cd='账号：<input type="text" name="user[]"><br>密码：<input type="text" name="psd[]"><br>';
		$("#cd").append(cd);

	}


</script>