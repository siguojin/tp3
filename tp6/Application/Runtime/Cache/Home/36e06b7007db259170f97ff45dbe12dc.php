<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="1px" cellspacing="0">
	<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
		<td><?php echo ($vo["id"]); ?></td>
		<td><?php echo ($vo["user"]); ?></td>
		<td><img src="/Uploads/<?php echo ($vo["file"]); ?>" alt=""></td>
		<td><?php echo ($vo["cd"]); ?></td>
	</tr><?php endforeach; endif; ?>
	</table>
</body>
</html>