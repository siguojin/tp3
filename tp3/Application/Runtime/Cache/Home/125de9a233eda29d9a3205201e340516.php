<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('upload');?>" method="post">
	<input type="hidden" name="id" value="<?php echo ($info["id"]); ?>">
	管理员：<input type="text" name="user" value="<?php echo ($info["user"]); ?>"><br>
	初始密码：<input type="password" name="pwd" value="<?php echo ($info["pwd"]); ?>"><br>
	性别：<input type="radio" name="cs" value="男"  <?php if($r['cs'] == 男): ?>checked<?php endif; ?> checked>男
		<input type="radio" name="cs" value="女"   <?php if($r['cs'] == 女): ?>checked<?php endif; ?> checked>女<br>
	手机：<input type="text" name="phon" value="<?php echo ($info["phon"]); ?>"><br>
	邮箱：<input type="text" name="you" value="<?php echo ($info["you"]); ?>"><br>
	角色：<select name="cd" value="<?php echo ($info["cd"]); ?>" checked>
			<option value="请输入">请输入</option>
			<?php if(is_array($list)): foreach($list as $key=>$vo): ?><option value="<?php echo ($vo["users"]); ?>" selected><?php echo ($vo["users"]); ?></option><?php endforeach; endif; ?>
		</select><br>
	备注：<input type="text" name="bei" value="<?php echo ($info["bei"]); ?>"><br>
	<button>提交</button>
	</form>
</body>
</html>