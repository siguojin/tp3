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
			url:"<?php echo U('bdd');?>",
			dataType:'json',
			success:function(a){
				console_log(a);
			}
		})


	}

	</script>

<body>
	<input type="text"  onclick="qw()">
	
</body>
</html>