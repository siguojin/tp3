<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('add');?>" method="post" enctype="multipart/form-data">
		<table>
			姓名：<input type="text" name="user" ><br>
			密码：<input type="password" name="psd"><br>
			<span id="erzi">头像：<input type="file" name="files[]" id="sid"><br></span>
			
			<button>提交</button>

		</table>

	</form>
	<input type="submit" value="再上一条" onclick="qw()">
	
</body>
</html>
<script src="/Public/jquery.js"></script>
<script>

	function qw(){
		var str='头像：<input type="file" name="files[]" id="sid"><br>';
		$("#erzi").append(str);


	}

</script>