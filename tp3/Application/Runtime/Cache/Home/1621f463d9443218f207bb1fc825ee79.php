<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('add');?>" method="post">
	管理员：<input type="text" name="user"><br>
	初始密码：<input type="password" name="pwd"><br>
	确认密码：<input type="password" name="psd" placeholder="确认密码"><br>
	性别：<input type="radio" name="cs" value="男">男
		<input type="radio" name="cs" value="女">女<br>
	手机：<input type="text" name="phon"><br>
	邮箱：<input type="text" name="you"><br>
	角色：<select name="cd" id="">
			<option value="请输入">请输入</option>
			<?php if(is_array($list)): foreach($list as $key=>$vo): ?><option value="<?php echo ($vo["users"]); ?>"><?php echo ($vo["users"]); ?></option><?php endforeach; endif; ?>
		</select><br>
	备注：<input type="text" name="bei"><br>
	<button>提交</button>

	</form>
	
</body>
</html>