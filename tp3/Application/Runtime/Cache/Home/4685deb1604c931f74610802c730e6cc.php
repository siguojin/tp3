<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<input type="text" name="" id="user">
	<input type="button" value="评论" onclick="qw()">
	
</body>
</html>
<script src="/Public/jquery.js"></script>
<script>
	
	function qw(){
		var user=$("#user").val();
		$.ajax({
			type:"post",
			url:"<?php echo U('cdd');?>",
			data:{
				user:user
			},
			success:function(a){
				if(a==1){
					document.write('评论成功',U('bdd'));
				}
			}


		})


	}

</script>