<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('index');?>" method="post" > 
		
		<table >
			
			<tr>
				<td>账号</td>
				<td><input type="text" name="user[]" ></td>
			</tr>

			<tr>
				<td>密码</td>
				<td><input type="password" name="psd[]"></td>
			</tr>
				<span id="q"></span>
			<tr>
				<td>权限</td>
				<td>	<select name="pid" id="">
						<option value="请输入权限">请输入权限</option>
						<?php if(is_array($list)): foreach($list as $k=>$vo): ?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["user"]); ?></option><?php endforeach; endif; ?>
					</select></td>
			</tr>

			<tr>
				<td>添加权限</td>
				<td>	<input type="text" name="cd"></td>
			</tr>
			
			<tr>
				<td>省</td>
				<td>	<select name="sheng" id="sheng">
						<option value="请输入您的所在省">请输入您的所在省</option>
						<?php if(is_array($infos)): foreach($infos as $k=>$vo): ?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["users"]); ?></option><?php endforeach; endif; ?>

					</select></td>
			</tr>
		
			<tr>
				<td>市</td>
				<td>	<select name="shi" id="shi">
						<option value="请输入您的所在市">请输入您的所在市</option>
					</select></td>
			</tr>

			<tr>
				<td>县</td>
				<td>	<select name="xian" id="xian">
						<option value="请输入您的所在县">请输入您的所在县</option>
					</select></td>
			</tr>


		</table>

		<button>提交</button>

	</form>
	<input type="button" onclick='qw()' value="再来一条">
	
</body>
</html>
<script src="/Public/jquery.js"></script>
<script>
	function qw(){
		var cd='<tr><td>账号</td><td><input type="text" name="user[]"></td></tr><tr><td>密码</td><td><input type="text" name="psd[]"></td></tr>';
		$("#q").append(cd);

	}


	$("#sheng").change(function(){
		var sheng=$('#sheng').val();
		$.ajax({
			type:'POST',
			url:"<?php echo U('clcl');?>",
			data:{
				id:sheng,
				cd:1
			},
			success:function(a){
				$("#shi").html(a);
			}

		})

	})

	$("#shi").change(function(){
		var shi=$('#shi').val();
		$.ajax({
			type:'POST',
			url:"<?php echo U('clcl');?>",
			data:{
				id:shi,
				cd:1
			},
			success:function(a){
				$("#xian").html(a);
			}

		})

	})

</script>