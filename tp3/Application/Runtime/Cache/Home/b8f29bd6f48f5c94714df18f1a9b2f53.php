<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="1px" cellspacing="0">
	<th>id</th>
	<th>账号</th>
	<th>密码</th>
	<th>权限</th>
	<th>头像</th>
	<th>地区</th>
	<?php if(is_array($info)): foreach($info as $key=>$vo): ?><tr>
		<td ><?php echo ($vo["id"]); ?></td>
		<td onclick="qw(<?php echo ($vo["id"]); ?>)">
			<input type="text" style="display: none" id="c<?php echo ($vo["id"]); ?>" value="<?php echo ($vo["user"]); ?>" onblur="cd(<?php echo ($vo["id"]); ?>)">
			<span id="s<?php echo ($vo["id"]); ?>" ><?php echo ($vo["user"]); ?></span>
	</td>
		<td><?php echo ($vo["psd"]); ?></td>
		<td><?php echo ($vo["cd"]); ?></td>
		<td>	<?php if(is_array($vo["files"])): foreach($vo["files"] as $key=>$v): ?><img src="/Uploads/<?php echo ($v); ?>" width="50px" height="50px"><?php endforeach; endif; ?>
		</td>
		<td><?php echo ($vo["dq"]); ?></td>
	</tr><?php endforeach; endif; ?>
	
	</table>
</body>
</html>
<script src="/Public/jquery.js"></script>
<script>
	function qw(a){

		document.getElementById('c'+a).style.display="block";//将文本框显示出来
		document.getElementById('s'+a).innerHTML="";//将多余的隐藏了
	}


	function cd(a){
		var id=a;
		var name=document.getElementById('c'+a).value;

		$.ajax({
			type:'POST',
			url:"<?php echo U('data');?>",
			data:{
				id:id,
				name:name
			},
			success:function(a){
				if(a==1){
					  document.getElementById('c'+a).style.display="none";
               			       document.getElementById('s'+a).innerHTML=name;
				}else{
					alert('失败');
				}
			}

		})


	 }

</script>