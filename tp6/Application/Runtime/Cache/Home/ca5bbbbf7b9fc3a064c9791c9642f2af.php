<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<input type="text" name="user" id="user"><br>
	<input type="text" name="psd" id="psd"><br>
	<input type="button" value="登录" onclick="qw()">
</body>
</html>
<script src="/Public/jquery.js"></script>
<script>
	function qw(){
		var user=$("#user").val();
		var psd=$("#psd").val();
		$.ajax({
			type:"post",
			url:"<?php echo U('bdd');?>",
			data:{
				user:user,
				psd:psd
			},
			dataType:"json",
			success:function(a){
				console.log(a);
				if(a['code']==5){
					alert("登录成功");
					window.location.href="<?php echo U('cdd');?>";
				}else{
					alert("登录失败");
				}

			}
		})
	}

</script>