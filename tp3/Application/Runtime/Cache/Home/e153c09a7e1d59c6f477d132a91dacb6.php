<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U(prive);?>" method="post">
		<table>
			顶级权限：<select name="pid" id="">
					<option value="顶级权限">顶级权限</option>
					<?php if(is_array($info)): foreach($info as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>">
						<?php echo str_repeat('|-',$vo['level'])?>

						<?php echo ($vo["user"]); ?></option><?php endforeach; endif; ?>

				       </select><br>

			权限：<input type="text" name="user"><br>
			<select name="sheng" id="sheng">
				<option value="请输入省">请输入省</option>
				<?php if(is_array($list)): foreach($list as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["user"]); ?></option><?php endforeach; endif; ?>
			</select>
			<select name="shi" id="shi">
				<option value="请输入市">请输入市</option>
			</select>
			<select name="xian" id="xian">
				<option value="请输入县">请输入县</option>
			</select>
			<button>提交</button>

		</table>
	</form>
</body>
</html>
<script src="/Public/jquery.js"></script>
<script>
	$('#sheng').change(function(){
		var sid=$('#sheng').val();
		$.ajax({
			type:'POST',
			url:"<?php echo U('clcl');?>",
			data:{
				sid,sid,
				statuc:1
			},
			success:function(a){
				$("#shi").html(a);
			}

		})
	})


</script>