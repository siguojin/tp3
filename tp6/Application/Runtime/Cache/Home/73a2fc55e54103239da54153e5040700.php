<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="1px">
		<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
				<td><input type="checkbox" value="<?php echo ($vo["id"]); ?>" name="cd"><?php echo ($vo["id"]); ?></td>
				<td><?php echo ($vo["fen"]); ?></td>
				<td><?php echo ($vo["ming"]); ?></td>
				<td><?php echo ($vo["shu"]); ?></td>
				<td><?php echo ($vo["bz"]); ?></td>

			</tr><?php endforeach; endif; ?>
		<input type="button" value="选中删除" onclick="qw()">
	</table>

	<?php echo ($page); ?>
	
</body>
</html>
<script src="/Public/jquery.js"></script>
<script>

	function qw(){
		var id=document.getElementsByName('cd');
		var length=id.length;
		var str="";
		for(var i=0;i<id.length;i++){
			if(id[i].checked){
				str+=id[i].value+',';
			}
		}
		$.ajax({
			type:"post",
			url:"<?php echo U('clcl');?>",
			data:{
				id:str
			},
			success:function(a){
				if(a==1){
					alert('删除成功');
					window.location.href="<?php echo U('bdd');?>";
				}else{
					alert('删除失败');
				}
			}
		})
	}


</script>