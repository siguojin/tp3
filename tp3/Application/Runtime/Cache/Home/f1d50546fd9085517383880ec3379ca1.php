<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="jbk">
	<title>Document</title>
</head>
	<script src="/Public/jquery.js"></script>
	<script>

		function qw(){
			$.ajax({
			url:"<?php echo U('edd');?>",
			dataType:'json',
			success:function(a){
				var str=" ";
				$.each(a,function(k,v){
					str=str+'<tr><td>'+v.id+'</td></tr>';
					str=str+'<tr><td>'+v.phon+'</td></tr>';
				})
				$("#table").append(str);
			}
		})

		}

	</script>

<body>
	<input type="button" onclick="qw()" value="渲染">
	<table id="table">

	</table>
</body>
</html>