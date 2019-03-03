<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="<?php echo U('addUser');?>">新增用户</a>
	<form action="<?php echo U('showUser');?>" method="get">
		<input type="text" name="search">
		<input type="submit" value="搜索一下">
	</form>
	<input type="text" id="searchs">
	<input type="button" value="搜索二" onclick="searchs()">
	<table border="1">
		<th>id</th>
		<th>邮箱</th>
		<th>用户名</th>
		<th>手机号</th>
		<th>地址</th>
		<?php if(is_array($info)): foreach($info as $k=>$vo): ?><tr>
				<td><?php echo ($vo["id"]); ?></td>
				<td><?php echo ($vo["email"]); ?></td>
				<td><?php echo ($vo["username"]); ?></td>
				<td><?php echo ($vo["telphone"]); ?></td>
				<td><?php echo ($vo["address"]); ?></td>
			</tr><?php endforeach; endif; ?>
	</table>
	<?php echo ($page); ?>
</body>
</html>
<script src="/Public/jquery.js"></script>
<script type="text/javascript">
	function searchs(){
		var search=$("#searchs").val();
		window.location.href="http://localhost/siguojin/index.php/Home/User/showUser/search/"+search;
	}
</script>