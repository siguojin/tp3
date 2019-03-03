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
					url:"<?php echo U('cdd');?>",
					dataType:'json',
					success:function(a){
						var str=" ";
						$.each(a,function(k,v){
							str=str+'<tr><td>'+v.id+'</td>';
							str=str+'<td>'+v.user+'</td>';
							str=str+'<td>'+v.sex+'</td>';
							str=str+'<td>'+v.age+'</td></tr>';

						})
						$("#table").append(str);

					}
				})
			}
	</script>

<body>
	<button onclick="qw()">渲染</button>
	<table id="table" border="1px">
	<th>id</th>
	<th>姓名</th>
	<th>性别</th>
	<th>年龄</th>
	</table>
</body>
</html>