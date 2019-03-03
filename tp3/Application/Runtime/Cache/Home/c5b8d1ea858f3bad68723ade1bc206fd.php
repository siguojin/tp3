<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('login');?>" method="post">
		
		<table>
			账号：<input type="text" name="user"><br>
			密码：<input type="text" name="psd"><br>
			验证码：<input type="text" name="code"><br>
			<span id="cd"><img src="<?php echo U('count');?>" alt="" width="100px" height="80px"></span>
			<a href="#" onclick="qw()">看不清，换一张</a>
			<button>提交</button>

		</table>
	</form>
</body>
</html>
<script src="/Public/jquery.js"></script>
<script>

	function qw(){
		document.getElementById('cd').innerHTML='<img src="<?php echo U('count');?>" alt="" width="100px" height="80px">';


	}
 
</script>