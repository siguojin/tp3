<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="gbk">
	<title>Document</title>
</head>
<body>
	<table>
		<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
				<td><?php echo ($vo["gs"]); ?></td>
				<td><?php echo ($vo["dz"]); ?></td>
				<td><?php echo ($vo["xz"]); ?></td>
				<td><?php echo ($vo["ny"]); ?></td>
				<td><?php echo ($vo["dd"]); ?></td>

			</tr><?php endforeach; endif; ?>
		
	
	</table>
	<?php echo ($page); ?>

	
</body>
</html>