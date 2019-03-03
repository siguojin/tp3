<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="">
		<table>
			
			姓名：<input type="text" name="user" id="user"><br>
			密码：<input type="password" name="psd" id="psd"><br>
			手机号：<input type="text" name="phon" id="phon"><br>
			<input type="button" value="提交" onclick="qw()">
			
		</table>
	</form>
	
</body>
</html>
<script src="/Public/jquery.js"></script>
<script>
	function qw(){
		var user=$("#user").val();
		var psd=$("#psd").val();
		var phon=$("#phon").val();
		$.ajax({
			type:'POST',
			url:"<?php echo U('add');?>",
			data:{
				user:user,
				psd:psd,
				phon:phon
			},
			success:function(a){
				if(a==1){
					alert('添加成功');
					window.location.href="<?php echo U('bdd');?>";
				}
			}
		})
	}
</script>