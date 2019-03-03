<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('add');?>" method="post">
		管理员：<input type="text" name="user"><br>
		初始密码：<input type="password" name="psd"><br>
		确认密码：<input type="password" name="pwd"><br>
		性别：<input type="radio" name="cd" value="男">男
			<input type="radio" name="cd" value="女">女<br>
		手机：<input type="text" name="phon"><br>
		角色：<select name="names" id="">
				<option value="超级管理员">超级管理员</option>
				<?php if(is_array($info)): foreach($info as $key=>$vo): ?><option value="<?php echo ($vo["user"]); ?>"><?php echo ($vo["user"]); ?></option><?php endforeach; endif; ?>
			</select><br>
		备注：<input type="text" name="cee"><br>
		<button>提交</button>
	</form>
	
</body>
</html>