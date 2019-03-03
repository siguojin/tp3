<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table>
		<th>id</th>
		<th>角色名</th>
		<th>用户列表</th>
		<th>操作</th>
	<?php if(is_array($info)): foreach($info as $key=>$vo): ?><tr>
			<td><?php echo ($vo["id"]); ?></td>
			<td><?php echo ($vo["user"]); ?></td>
			<td><?php echo ($vo["names"]); ?></td>
			<td><a href="">删除</a>
				<a href="<?php echo U('update',array('id'=>$vo[id]));?>">修改</a>
			</td>

		</tr><?php endforeach; endif; ?>
	</table>
</body>
</html>