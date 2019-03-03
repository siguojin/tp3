<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<form action="<?php echo U('insertUser');?>" method="post">
			<tr>
				<td>姓名</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>邮箱</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>电话</td>
				<td><input type="text" name="telphone"></td>
			</tr>
			<tr>
				<td>地址</td>
				<td><input type="text" name="address"></td>
			</tr>
			<tr>
				<td>选择角色</td>
				<td>
					<?php if(is_array($info)): foreach($info as $k=>$vo): ?><input type="checkbox" name="roles[]" value="<?php echo ($vo["rid"]); ?>"><?php echo ($vo["role_name"]); endforeach; endif; ?>
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" value="提交">
				</td>
			</tr>
		</form>
	</table>
</body>
</html>