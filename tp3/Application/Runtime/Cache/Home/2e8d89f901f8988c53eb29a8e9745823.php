<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>

<body>
<form action="<?php echo U('clcl');?>" method="get">
	<input type="text" name="cd">
	<button>搜索</button>

	</form>
	<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
			<td><?php echo ($vo["id"]); ?></td>
			<td><?php echo ($vo["user"]); ?></td>
			<td><?php echo ($vo["psd"]); ?></td>
			<td><img src="/Uploads/<?php echo ($vo["files"]); ?>" alt="" width="100px" height="30px"></td>
		</tr><?php endforeach; endif; ?>
	<?php echo ($page); ?>
</body>
</html>