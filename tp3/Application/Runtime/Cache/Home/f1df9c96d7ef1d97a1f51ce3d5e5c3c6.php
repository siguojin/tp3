<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
	<script src="/Public/jquery.js"></script>
	<script>
		function qw(){
			$.ajax({
				url:"<?php echo U('add');?>",
				dataType:"json",
				success:function(a){
					var str="";
					$.each(a,function(k,v){
					str=str+'<tr><td>'+v.id+'</td>';
					str=str+'<td>'+v.name+'</td>';
					str=str+'<td>'+v.sex+'</td>';
					str=str+'<td>'+v.addr+'</td></tr>';
				})
				$('#table').append(str);
			}
			})
		}
	</script>
<body>
<input type="button" onclick="qw()" value="接口">
	<table id="table">
		<th>id</th>
		<th>姓名</th>
		<th>性别</th>
		<th>地区</th>
	
	</table>

	
</body>
</html>