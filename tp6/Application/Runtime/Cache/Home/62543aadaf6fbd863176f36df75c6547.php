<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="1px" cellspacing="1px">
		<th>id</th>
		<th>头像</th>
		<?php if(is_array($info)): foreach($info as $k=>$v): ?><tr>
				<td><?php echo ($v["id"]); ?></td>
			<td>
				<?php if(is_array($v["侯少雄儿子"])): foreach($v["侯少雄儿子"] as $k=>$vo): ?><img src="/Uploads/<?php echo ($vo); ?>" width="50px" height="50px"><?php endforeach; endif; ?>
		
			</td>
			</tr><?php endforeach; endif; ?>
	</table>

	
</body>
</html>