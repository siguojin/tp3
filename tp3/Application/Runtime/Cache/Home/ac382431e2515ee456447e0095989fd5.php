<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<table border="1px" cellpadding="0" >

	<form action="<?php echo U('show');?>" method="get">
		<input type="text" name="sou"><button>搜索</button>
	</form>

	<th>id</th>
	<th>账号</th>
	<th>密码</th>
	<th>操作</th>
	<?php if(is_array($info)): foreach($info as $key=>$v): ?><tr>	
			<td><?php echo ($v["id"]); ?></td>
			<td><?php echo ($v["users"]); ?></td>
			<td><?php echo ($v["password"]); ?></td>
			<td>     <a href="<?php echo U('delete',array('id'=>$v['id']));?>">删除</a>
				<a href="<?php echo U('update',array('id'=>$v['id']));?>">修改</a>
			</td>

		</tr><?php endforeach; endif; ?>
	<?php echo ($page); ?>
</table>

	
</body>
</html>