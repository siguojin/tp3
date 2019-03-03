<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	 <form action="<?php echo U('sousuo');?>" method="get">
                                <input type="text" name="sou" value="<?php echo I('get.sou')?>" />
                        <input value="查询" type="submit" />
                </form>

	<table border="1px" cellspacing="0">
		<th>id</th>
		<th>用户</th>
		<th>密码</th>
		<?php if(is_array($info)): foreach($info as $key=>$vo): ?><tr>
				<td><input type="checkbox" name="cd" value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["id"]); ?></td>
				<td><?php echo ($vo["user"]); ?></td>
				<td><?php echo ($vo["names"]); ?></td>
			</tr><?php endforeach; endif; ?>
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
				url:"<?php echo U('dele');?>",
				data:{
					id:str
				},
				success:function(a){
					if(a==1){
						alert('删除成功');
						window.location.href="<?php echo U('select');?>";
					}else{
						alert('删除失败');
					}
				}
			})
	}


</script>