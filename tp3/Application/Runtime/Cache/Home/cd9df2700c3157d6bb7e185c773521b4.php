<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('save');?>" method="post">
		<input type="hidden" name="id" value="<?php echo ($info["id"]); ?>"><br>
		<select name="cd" value="<?php echo ($info["cd"]); ?>" >
			<option value="请输入">请输入</option>
			<?php if(is_array($list)): foreach($list as $key=>$v): ?><option value="<?php echo ($v["cd"]); ?>"><?php echo ($v["cd"]); ?></option><?php endforeach; endif; ?>
		</select>

		<button>修改</button>

	</form>
</body>
</html>