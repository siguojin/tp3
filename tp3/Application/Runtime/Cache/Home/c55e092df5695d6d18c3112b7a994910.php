<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('add');?>" method="post" enctype="multipart/form-data">
		账号：<input type="text" name="user[]"><br>
		密码：<input type="password" name="psd[]"><br>
		头像：<input type="file" name="files[]"><br>
		地区：<select name="" id="sheng">
			<option value="请输入省">请输入省</option>
			<?php if(is_array($info)): foreach($info as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["users"]); ?></option><?php endforeach; endif; ?>
			</select>
			<select name="" id="shi">
			<option value="请输入市">请输入市</option>
			</select>
			<select name="" id="xian">
			<option value="请输入县">请输入县</option>
			</select>
		<span id="cd"></span>
		<button>提交</button>
	</form>	
	<input type="button" onclick="qw()" value="添加一条">

	
</body>
</html>
<script src="/Public/jquery.js"></script>
<script>
	//多图多条 
	function qw(){
		var str='账号：<input type="text" name="user[]"><br>密码：<input type="password" name="psd[]"><br>头像：<input type="file" name="files[]"><br>';
		$("#cd").append(str);
	}

	



</script>