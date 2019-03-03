<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('bdds');?>" method="post" enctype="multipart/form-data">
	
	<span id="cd">头像：<input type="file" name="files"><br></span>
	<input type="button" value="添加一条" onclick="qw()">
	<button >提交</button>
	</form>
	
</body>
</html>
<!-- <script src="/Public/jquery.js"></script>
<script>

	function qw(){
		var q='头像：<input type="file" name="files[]"><br>';
		$("#cd").append(q);s


	}

</script>
 -->