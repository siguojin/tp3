<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
	<script src="/Public/jquery.js"></script>
	<script>
		$(function(){
			$.ajax({
				url:"<?php echo U('cdd');?>",
				dataType:'json',
				success:function(a){
					var str=" ";
					$.each(a,function(k,v){
						str=str+'<tr><td>'+v.id+'</td>';
						str=str+'<td>'+v.user+'</td>';
						str=str+'<td>'+v.psd+'</td>';
						str=str+'<td>'+v.phon+'</td>';
						str=str+'<td>'+v.id+'</td></tr>';
					})
					$("#qw").append(str);
				}
			})
		})
	</script>
<body>
	<table id="qw" border="1px" cellspacing="0">
		<th>id</th>
		<th>姓名</th>
		<th>密码</th>
		<th>手机号</th>
		<th>操作</th>
	</table>
</body>
</html>