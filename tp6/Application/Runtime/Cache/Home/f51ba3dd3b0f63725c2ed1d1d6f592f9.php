<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="1px" cellspacing="0">
		<th>id</th>
		<th>账户</th>
		<th>密码</th>
		<th>头像</th>
		<th>上架</th>
		<th>省市</th>
		<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
				<td><input type="checkbox" name="cd" value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["id"]); ?></td>
				<td><?php echo ($vo["user"]); ?></td>
				<td><?php echo ($vo["psd"]); ?></td>
				<td>
					<?php if(is_array($vo["files"])): foreach($vo["files"] as $key=>$v): ?><img src="/Uploads/<?php echo ($v); ?>" width="30px" height="30px"><?php endforeach; endif; ?>
				</td>
				<td>
				<a href="<?php echo U(shang,array('id'=>$vo['id'],'status'=>$vo['status']));?>"><?php
 if($vo['status']==1){ echo "上架"; }else{ echo "下架"; } ?>
	
				</a>
				</td>
				<td><?php echo ($vo["users"]); ?></td>	
				<td><a href="<?php echo U('delete',array('id'=>$vo['id']));?>">删除</a>
				       <a href="<?php echo U('update',array('id'=>$vo['id']));?>">修改</a>
				</td>
				
			</tr><?php endforeach; endif; ?>
		<?php echo ($page); ?>
	</table>
	<input type="button" value="选中删除" onclick="qw()">

	
</body>
</html>
<script src="/Public/jquery.js"></script>
<script>

	function qw(){
	var id=document.getElementsByName('cd');
	var length=id.length;
	var str=" ";
	for(var i=0;i<length;i++){
		if(id[i].checked){
			str+=id[i].value+',';
		}
	}
	$.ajax({
		type:'POST',
		url:"<?php echo U('all');?>",
		data:{
			id:str
		},
		success:function(a){
			if(a==1){
				alert('删除成功');
				window.location.href="<?php echo U('bbd');?>";
			}else{
				alert('删除失败');
			}
		}

	})

	}

</script>