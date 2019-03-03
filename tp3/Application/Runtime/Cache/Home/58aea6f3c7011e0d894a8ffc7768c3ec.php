<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
	body{
		font-size: 14px;
	}




	</style>
</head>
<body>
	<a href="<?php echo U('index');?>">返回添加页面</a>
	<table border='1' cellspacing="0" width="1200" align="center">
		<tr>
			<th>会员名称</th>
			<th>会员手机</th>
			<th>商品分类</th>
			<th>商品名称</th>
			<th>商品数量</th>
			<th>上货价钱</th>
			<th>奖金硬币</th>
			<th>货钱总和</th>
			<th>金币总和</th>
			<th>收货城市</th>
			<th>收货备注</th>
		</tr>
		<?php if(is_array($info)): foreach($info as $key=>$v): ?><tr align="center">
				<td><?php echo ($v["user"]); ?></td>
				<td><?php echo ($v["phon"]); ?></td>
				<td><?php echo ($v["fen"]); ?></td>
				<td><?php echo ($v["text"]); ?></td>
				<td><?php echo ($v["goods_name"]); ?></td>
				<td><?php echo ($v["goods_num"]); ?></td>
				<td><?php echo ($v["top_price"]); ?></td>
				<td><?php echo ($v["money_num"]); ?></td>
				<td><?php echo ($v["top_he"]); ?></td>
				<td><?php echo ($v["money_he"]); ?></td>
				<td><?php echo ($v["diqu"]); ?></td>


			</tr><?php endforeach; endif; ?>
	</table>
</body>
</html>