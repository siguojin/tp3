<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
			<select name="sheng" id="sheng">
				<option value="请输入省">请输入省</option>
				<?php if(is_array($info)): foreach($info as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["users"]); ?></option><?php endforeach; endif; ?>
			</select>
			<select name="shi" id="shi">
				<option value="请输入市">请输入市</option>
			</select>
			<select name="xian" id="xian">
				<option value="请输入县">请输入县</option>
			</select>
</body>
</html>
<script src="/Public/jquery.js"></script>
<script>

	$("#sheng").change(function(){


		var sid=$("#sheng").val();
		$.ajax({
			type:'POST',
			url:"<?php echo U('clcl');?>",
			data:{
				sid:sid,
				cd:1

			},
			success:function(a){
				$("#shi").html(a);
			}

		})


	})

	$("#shi").change(function(){


		var sid=$("#shi").val();
		$.ajax({
			type:'POST',
			url:"<?php echo U('clcl');?>",
			data:{
				sid:sid

			},
			success:function(a){
				$("#xian").html(a);
			}

		})


	})

</script>