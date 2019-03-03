<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('inset');?>" method="post">
		<table>
			姓名：<input type="text" name="user[]"><br>
			密码：<input type="text" name="psd[]"><br>
			<span id="cd"></span>
	
		</table>
			<button>提交</button>
	</form>

	<input type="button" value="新增一条" onclick="qw()">
</body>
</html>
<script src="/Public/jquery.js"></script>
<script>
 	function qw(){
 		var str='姓名：<input type="text" name="user[]"><br>密码：<input type="text" name="psd[]"><br>';
 		$('#cd').append(str);


 	}


</script>