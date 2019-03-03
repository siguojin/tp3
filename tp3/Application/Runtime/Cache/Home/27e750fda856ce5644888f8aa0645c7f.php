<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('cdd');?>" method="post">
		<select name="pid" id="">
		<option value="请输入">请输入</option>

		<?php if(is_array($list)): foreach($list as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>"><?php echo str_repeat("|-",$vo['level']); echo ($vo["user"]); ?></option><?php endforeach; endif; ?>
		
	</select><br>
	添加权限：<input type="text" name="user"><br>
		<button>提交</button>
	</form>
</body>
</html>