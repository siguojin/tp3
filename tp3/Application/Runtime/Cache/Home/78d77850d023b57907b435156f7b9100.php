<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<script src="/Public/jquery.js"></script>
<script>

	$("#tab tr").click(function(){
		$("tab2").append('<tr>'+(this).html()+'</tr>');
		$(this).html(' ');
	})

	function show(){
		$.ajax({
			url:"<?php echo U('edd');?>",
			data:'get',
			success:function(a){
				cd.innerHTML=a;
			}
		})
		
	}
	setInterval("show()","1000");
	
</script>
<body>
<span id="cd"></span>
	
	<table id="tab" border="1px" width="100px" height="30px"> 
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</table>
	<table id="tab2" border="1px">

	</table>

</body>
</html>