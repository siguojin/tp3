<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<script src="/Public/jquery.js"></script>
<script>
	
	$("#cd").click(function(){

		$("input").attr("disabled",true);
	})

</script>
<body>
	<table border="1px">
		<tr>
			<td><input type="checkbox" id="cd"></td>
			<td><input type="text" id="qw"></td>
			<td></td>
		</tr>
		<tr>
			<td><input type="checkbox"></td>
			<td><input type="text"></td>
			<td></td>
		</tr>
		<tr>
			<td><input type="checkbox"></td>
			<td><input type="text"></td>
			<td></td>
		</tr>
		<tr>
			<td><input type="checkbox"></td>
			<td><input type="text"></td>
			<td></td>
		</tr>
		<tr>
			<td><input type="checkbox"></td>
			<td><input type="text"></td>
			<td></td>
		</tr>

	</table>
	
</body>
</html>