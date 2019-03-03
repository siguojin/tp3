<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	账号：<input type="text" name="user" id="user"><br>
	密码：<input type="text" name="psd" id="psd"><br>
	<input type="button" value="提交" onclick="qw()">
</body>
</html>
<script src="/Public/jquery.js"></script>
<script>

	function qw(){
		var user=$("#user").val();
		var psd=$("#psd").val();
		$.ajax({
			type:"post",
			url:"<?php echo U(bdd);?>",
			data:{
				user:user,
				psd:psd
			},
			dataType:"json",
			success:function(a){
				console.log(a);
				if(a['code']==5){
					alert("登陆成功");
					window.location.href="<?php echo U('cdd');?>";
				}else{
					alert('登录失败');
				}
			}
		})
	}

</script>