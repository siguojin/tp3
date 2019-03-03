<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body><table border="1px" cellspacing="0">
	<?php if(is_array($info)): foreach($info as $key=>$vo): ?><tr>
			<td><input type="checkbox" name="cd" value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["id"]); ?></td>
			<td><?php echo ($vo["fen"]); ?></td>
			<td><?php echo ($vo["ming"]); ?></td>
			<td><?php echo ($vo["shu"]); ?></td>
			<td><?php echo ($vo["bz"]); ?></td>
	
		</tr><?php endforeach; endif; ?>
	</table>
	<input type="button" onclick="qw()" value="选中删除">
</body>
</html>
<script src="/Public/jquery.js"></script>
<script>
	function qw(){
		var id=document.getElementsByName('cd');
		var length=id.length;
		// alert(length);
		var str=" ";
		for(var i=0;i<id.length;i++){
			if(id[i].checked){
				str+=id[i].value+',';
			}
		}

		$.ajax({
			type:"POST",
			url:"<?php echo U('clcl');?>",
			data:{
				id:str
			},
			success:function(a){
				alert(a);
			}
		})
			
		

	}


</script>