<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	姓名：<input type="text" id="user" name="user"><br>
	性别：<input type="text" id="cd" name="cd"><br>
	密码：<input type="text" id="psd" name="psd"><br>
	手机号：<input type="text" id="phon" name="phon"><br>
	
	<input type="button" value="提交" id="tijiao">
</body>
</html>
<script src="/Public/jquery.js"></script>
<script>

	 $("#tijiao").click(function(){


		var user=$("#user").val();
		var cd=$("#cd").val();
		var psd=$("#psd").val();
		var phon=$("#phon").val();
		$.ajax({
			url:"<?php echo U('add');?>",
			type:"post",
			data:{
				user:user,
				cd:cd,
				psd:psd,
				phon:phon
			},
			// dataType:'json',
			success:function(a){
				//alert(a);
				if(a==1){
					alert('添加成功');
					window.location.href="<?php echo U('cdd');?>";
					// window.location.href="<?php echo U('add');?>"; 
				}else{
					alert('添加失败');
					
				}
			}
		})
	})


</script>