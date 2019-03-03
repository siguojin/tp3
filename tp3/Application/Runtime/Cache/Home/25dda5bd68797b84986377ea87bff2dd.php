<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="1px" cellspacing="0">
		<th>ID</th>
		<th>姓名</th>
		<th>货号</th>
		<th>头像</th>
		<th>操作</th>
		<?php if(is_array($info)): foreach($info as $k=>$v): ?><tr>
			<td><input type="checkbox" name="cd"  value="<?php echo ($v["id"]); ?>"><?php echo ($v["id"]); ?></td>
		 	<td><?php echo ($v["users"]); ?></td>
			<td><?php echo ($v["hh"]); ?></td>
			<td><img src="<?php echo ($v["files"]); ?>" width="50px" height="50px"></td>
			<td><a href="<?php echo U('delete',array('id'=>$v['id']));?>">删除</a></td>
		</tr><?php endforeach; endif; ?>

	</table>
	<input type="button" onclick="qq()" value="全部删除">
	<input type="button" onclick="qw()" value="全选">
	<input type="button" onclick="qwe()" value="反选">
	<?php echo ($page); ?>
</body>
</html>

<script src='/Public/jquery.js'></script>
<script>
		function qq(){
			var id=document.getElementsByName('cd');//去name值
			var str="";//定义一个空的变量
			var length=id.length;//长度
			for(var i=0;i<length;i++){
				if(id[i].checked){
					str+=id[i].value+',';
				}
			}

			$.ajax({
				type:"POST",
				url:"<?php echo U('deletes');?>",
				data:{
					id:str
				},
				success:function(e){
					alert(e);
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
		
			var id=document.getElementsByName('cd');//去name值
			var length=id.length;
			for(var i=0;i<length;i++){
				if(id[i].checked){
					id[i].checked=false;
				}else{
					id[i].checked=true;
				}
			}

		}

		function qwe(){
			var id=document.getElementsByName('cd');//去name值
			var length=id.length;
			for(var i=0;i<length;i++){
				if(id[i].checked){
					id[i].checked=false;
				}
			}
		}






</script>