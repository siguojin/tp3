<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('clcl');?>" method="get">
	<!-- <input type="hidden" name="id" id="id"> -->
	<input type="text" name="user" ><br>
	<button >搜索</button>

	</form>

	<table border="1px" cellspacing="1">
		<th>id</th>
		<th>名称</th>
		<th>价格</th>
		<th>头像</th>
		<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
				<td><?php echo ($vo["id"]); ?></td>
				<td><?php echo ($vo["user"]); ?></td>
				<td><?php echo ($vo["phon"]); ?></td>
				<td><img src="/Uploads/<?php echo ($vo["files"]); ?>" width="100px" height="100px"></td>
			</tr><?php endforeach; endif; ?>
	</table>
</body>
</html>
<!-- <script src='/Public/jquery.js'></script>
<script>
	function qw(){
	var id=document.getElementsByName('user');
	$.ajax({
		type:"POST",
		url:"<?php echo U('clcl');?>",
		data:{
			id:id
		},
		success:function(a){
			alert(a);
		}

	})


	}


</script> -->