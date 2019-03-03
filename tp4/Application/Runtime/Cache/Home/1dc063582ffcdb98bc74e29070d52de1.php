<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="1"  bgcolor="green" cellspacing="0" bordercolor="green">
		<th>id</th>
		<th>用户</th>
		<th>密码</th>
		<th>头像</th>
		<th>地区</th>
		<th>操作</th>
		<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
				<td><?php echo ($vo["id"]); ?></td>
				<td><?php echo ($vo["user"]); ?></td>
				<td><?php echo ($vo["psd"]); ?></td>
				<td>
					<?php if(is_array($vo["files"])): foreach($vo["files"] as $key=>$v): ?><img src="/Uploads/<?php echo ($v); ?>" width="50px" height="50px"><?php endforeach; endif; ?>
				</td>
				<td><?php echo ($vo["users"]); ?></td>
				<td><a href="<?php echo U('delete',array('id'=>$vo['id']));?>">删除</a></td>
			</tr><?php endforeach; endif; ?>
	</table>
	
</body>
</html>