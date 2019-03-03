<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>	<a href="<?php echo U('add');?>">添加权限</a>
	<form action="<?php echo U('cdd');?>" method="post">
		角色名：<input type="text" name="user"><br>
		
		<?php if(is_array($info)): foreach($info as $key=>$vo): ?><input type="checkbox" value="<?php echo ($vo["pid"]); ?>"><?php echo ($vo["pname"]); endforeach; endif; ?><br>

		<button>添加成功</button>


	</form>


</body>
</html>