<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="1px" cellspacing="0">
		<th>id</th>
		<th>姓名</th>
		<th>密码</th>
		<th>头像</th>
		<th>操作</th>
		<?php if(is_array($info)): foreach($info as $k=>$vo): ?><tr>
				<td><input type="checkbox" name="cd" value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["id"]); ?></td>
				<td><?php echo ($vo["user"]); ?></td>
				<td><?php echo ($vo["psd"]); ?></td>
				<td>	
				<?php if(is_array($vo["files"])): foreach($vo["files"] as $k=>$v): ?><img src="/Uploads/<?php echo ($v); ?>" width="100px" height="100px"><?php endforeach; endif; ?>

				</td>
				<td>
				<a href="<?php echo U('delete',array('id'=>$vo['id']));?>">删除</a>
				<a href="<?php echo U('update',array('id'=>$vo['id']));?>">修改</a>
				</td>
			</tr><?php endforeach; endif; ?>
		<?php echo ($page); ?>
	</table>
	<input type="submit" value="选中删除" onclick="qw()">
	<input type="submit" value="全选" onclick="q()">
	<input type="submit" value="反选" onclick="w()">
</body>
</html>
<script src="/Public/jquery.js"></script>
<script>
	function qw(){
		var id=document.getElementsByName('cd');
		str="";
		var length=id.length;
		for(var i=0;i<length;i++){
		if(id[i].checked){
			str+=id[i].value+",";

		}

		}
		$.ajax({
			type:"POST",
			url:"<?php echo U('cdd');?>",
			data:{
				id:str
			},
			success:function(q){
				if(q==1){
					alert('删除成功');
					window.location.href="<?php echo U('bdd');?>"; s 
				}else{
					alert('删除失败');
				}
			}
		})
	}

	function q(){
		var id=document.getElementsByName('cd');
	
		var length=id.length;
	
		for(var i=0;i<length;i++){
			id[i].checked=true;
		}

	}
	function w(){
		var id=document.getElementsByName('cd');
		var length=id.length;
	
		for(var i=0;i<length;i++){
			id[i].checked=false;
		}

	}

</script>