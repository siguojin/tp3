<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="1px">
		<?php if(is_array($info)): foreach($info as $key=>$vo): ?><tr>
			<td><input type="checkbox" value="<?php echo ($vo["id"]); ?>" name="cd"><?php echo ($vo["id"]); ?></td>
			<td><?php echo ($vo["user"]); ?></td>
			<td><?php echo ($vo["psd"]); ?></td>
		</tr><?php endforeach; endif; ?>
	</table>
	<button onclick="qw()">选中删除</button>
	
</body>
</html>
<script src="/Public/jquery.js"></script>
<script>

function qw(){
	var id=document.getElementsByName('cd');
	var length=id.length;
	var str="";
	for(var i=0;i<length;i++){
		if(id[i].checked){
			str+=id[i].value+",";
		}
	}

	$.ajax({
		type:'POST',
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