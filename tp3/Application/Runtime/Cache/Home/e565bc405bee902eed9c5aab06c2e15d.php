<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('add');?>" method="post">
		fid：<select name="pid" id="">
			<option value="">请输入</option>
			<?php if(is_array($info)): foreach($info as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["user"]); ?></option><?php endforeach; endif; ?>
		
		</select><br>
		用户：<input type="text" name="user">
			<button>提交</button>


	</form>
	
</body>
</html>