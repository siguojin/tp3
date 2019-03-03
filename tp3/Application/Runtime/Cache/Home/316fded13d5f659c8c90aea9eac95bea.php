<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('upload');?>" method="post">
	<input type="hidden" name="id" value="<?php echo ($info["id"]); ?>">
	管理员：<input type="text" name="user" value="<?php echo ($info["user"]); ?>" id="user"><br>
		
		角色：<select name="names" id="names"> 
				<option value="超级管理员">超级管理员</option>
				<?php if(is_array($list)): foreach($list as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["user"]); ?></option><?php endforeach; endif; ?>
			</select><br>
		<button>提交</button>

	</form>
	
</body>
</html>
<script src="/Public/jquery.js"></script>
<script>
	$("#names").change(function(){
		

	})

</script>