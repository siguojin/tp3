<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="1px" cellspacing="0px">
		<th>id</th>
		<th>user</th>
		<th>操作</th>
		<?php if(is_array($info)): foreach($info as $key=>$vo): ?><tr>
			<td><?php echo ($vo["id"]); ?></td>
			<td>		
					<?php echo str_repeat('|-',$vo['level'])?>
			<?php echo ($vo["user"]); ?></td>
		</tr><?php endforeach; endif; ?>


	</table>

	
</body>
</html>