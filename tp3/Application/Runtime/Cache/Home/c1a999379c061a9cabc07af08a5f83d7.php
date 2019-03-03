<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<table border="1px" >
	<tr>
	<?php if(is_array($info)): foreach($info as $key=>$v): ?><tr>
	<td><?php echo ($v["user"]); ?></td>
	<td><?php echo ($v["password"]); ?></td>
	<td><a href="<?php echo U('delete',array('id'=>$v['id']));?>">删除</a>
	<a href="<?php echo U('update',array('id'=>$v['id']));?>">修改</a>
	</td><?php endforeach; endif; ?>
	</tr>
	</tr>
</table>


</body>
</html>