<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<table border="1px">
		<th>id</th>
		<th>姓名</th>
		<th>货号</th>
		<th>头像</th>
		<th>操作</th>
		<?php if(is_array($list)): foreach($list as $k=>$v): ?><tr>
				<td><input type="checkbox" name="cd" value="<?php echo ($v["id"]); ?>"><?php echo ($v["id"]); ?></td>
				<td><?php echo ($v["users"]); ?></td>
				<td><?php echo ($v["hh"]); ?></td>
				<td><img src="/Uploads/<?php echo ($v["files"]); ?>" width="50px" height="50px"></td>
				<td><a href="<?php echo U(delete,array('id'=>$v['id']));?>">删除</a>
				<a href="<?php echo U(upload,array('id'=>$v['id']));?>">修改</a>
				</td>
			</tr><?php endforeach; endif; ?>

	</table>
	<?php echo ($page); ?>
	<input type="button" onclick="qq()" value="选中删除">
	<input type="button" onclick="qw()" value="全选">
	<input type="button" onclick="qwe()" value="翻选">
</body>
</html>
<script src="/Public/jquery.js"></script>
<script>
	function qq(){
		var id=document.getElementsByName('cd');
		var str="";
		var length=id.length;
		for(var i=0;i<length;i++){
			if(id[i].checked){
				str+=id[i].value+',';
			}
		}
		$.ajax({
			type:'POST',
			url:'<?php echo U(deletes);?>',
			data:{
				id:str
			},
			success:function(e){
				if(e==1){
					alert('删除成功');
					window.location.href="<?php echo U('bdd');?>";
				}else{
					alert('删除失败');
				}
			}


		})
	}


	function qw(){
		var id=document.getElementsByName('cd');
		var length=id.length;
		for(var i=0;i<length;i++){
				id[i].checked=true;
		}

	}

	function qwe(){
		var id=document.getElementsByName('cd');
		var length=id.length;
		for(var i=0;i<length;i++){
				id[i].checked=false;
		}
	}






</script>