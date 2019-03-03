<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('cdd');?>" method="post">
		账号：<input type="text" name="user" id="user"><br>
		密码：<input type="password" name="psd" id="psd"><br>
		验证码：<input type="text" name="code" id="code"><br>
		<span id="qc"><img src="<?php echo U('showcode');?>" width="200px" height="70px"></span>
		<a href="#" id="qw">换一个</a><br>
		<input type="button" value="登录" onclick="insert()">

	</form>
</body>
</html>
<script src="/Public/jquery.js"></script>
<script>
	$("#qw").click(function(){
		var str='<img src="<?php echo U('showcode');?>" width="200px" height="70px">'
		document.getElementById('qc').innerHTML=str;	

	})


	function insert(){
		var user=$("#user").val();
		var psd=$("#psd").val();
		var code=$("#code").val();

		$.ajax({
			type:'POST',
			url:"<?php echo U('insert');?>",
			data:{
				user:user,
				psd:psd,
				code:code
			},
			success:function(a){
				if(a==1){
					alert('验证码错误');
					
				}
				if(a==2){
					alert("添加成功");
					window.location.href="<?php echo U('bdd');?>";
				}
				if(a==3){
					alert('添加失败');
				}
			}


		})


	}

</script>