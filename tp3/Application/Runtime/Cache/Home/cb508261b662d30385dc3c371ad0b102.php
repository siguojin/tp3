<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="1">
	 <?php if(is_array($info)): foreach($info as $key=>$v): ?><tr>
	  <td><?php echo ($v["id"]); ?></td>
	  <td><?php echo ($v["username"]); ?></td>
	  <td><?php echo ($v["pwd"]); ?></td>
	  </tr><?php endforeach; endif; ?>
	</table>
</body>
</html>