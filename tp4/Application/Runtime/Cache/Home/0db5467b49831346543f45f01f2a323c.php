<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('cdd');?>" method="post" enctype="multipart/form-data">
		姓名：<input type="text" name="user[]"><br>
		密码：<input type="text" name="psd[]"><br>
		上架：<input type="radio" name="status[]" value="1">上架
			<input type="radio" name="status[]" value="2">下架<br>
		头像：<input type="file" name="files[]"><br>
		<span id="cd"></span>
		<select name="sheng" id="sheng">
			<option value="请输入您的省">请输入您的省</option>
			<?php if(is_array($info)): foreach($info as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["users"]); ?></option><?php endforeach; endif; ?>
		</select>
		<select name="shi" id="shi">
			<option value="请输入您的市">请输入您的市</option>
		</select>
		<select name="xian" id="xian">
			<option value="请输入您的省">请输入您的县</option>
		</select>

		
		<button>提交</button>
	</form>
	<input type="submit" value="来一条" onclick="qw()">
	
	
</body>
</html>
<script src="/Public/jquery.js"></script>
<script>
	function qw(){
$str='头像：<input type="file" name="files[]"><br>姓名：<input type="text" name="user[]"><br>密码：<input type="text" name="psd[]"><br>上架：<input type="radio" name="status" value="1">上架<input type="radio" name="status" value="2">下架<br>';
		$("#cd").append($str);

	}

	$("#sheng").change(function(){
		var sid=$("#sheng").val();
		$.ajax({
			type:'POST',
			url:"<?php echo U(sehng);?>",
			data:{
				sid:sid,
				status:1
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
			url:"<?php echo U(sehng);?>",
			data:{
				sid:sid
			},
			success:function(a){
				$("#xian").html(a);
			}
		})

	})

		
	


</script>