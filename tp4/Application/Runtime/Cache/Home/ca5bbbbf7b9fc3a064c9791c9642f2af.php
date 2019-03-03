<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
	<script src="/Public/jquery.js"></script>
	<script>
		function qw(){
			var user=$("#user").val();
			var sex=$("#sex").val();
			var age=$("#age").val();
			$.ajax({
				type:"post",
				url:"<?php echo U('bdd');?>",
				data:{
					user:user,
					sex:sex,
					age:age
				},
				success:function(a){
					if(a==1){
						alert('添加成功');
						window.location.href="<?php echo U('wdd');?>";
					}
				}
			})
		}

	</script>
<body>
	<input type="text" id="user"><br>
	<input type="text" id="sex"><br>
	<input type="text" id="age"><br>
	<button onclick="qw()">添加</button>


</body>
</html>