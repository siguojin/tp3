<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('cdd');?>" method="get">
	搜索：<input type="text" name="user" value="<?php echo I('get.user')?>"><button>搜索</button> 
	</form>

	<table border="1px" cellspacing="0">
		<?php if(is_array($info)): foreach($info as $key=>$vo): ?><tr>
			<td><?php echo ($vo["id"]); ?></td>
			<td><?php echo ($vo["user"]); ?></td>
			<td><?php echo ($vo["psd"]); ?></td>
			<td><img src="/Uploads/<?php echo ($vo["files"]); ?>" alt="" width="50px" height="50px"></td>

		</tr><?php endforeach; endif; ?>
	</table>


</body>
</html>