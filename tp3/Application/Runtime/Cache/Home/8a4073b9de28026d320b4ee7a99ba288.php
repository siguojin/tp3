<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<form action="<?php echo U('add');?>" method="post">
		
	配送区域：	<select name="sheng" id="sheng">
				<option value="请输入省">请输入省</option>
				<?php if(is_array($info)): foreach($info as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["users"]); ?></option><?php endforeach; endif; ?>
			</select>
			<select name="shi" id="shi">
				<option value="请输入市">请输入市</option>
			</select>
			<select name="xian" id="xian">
				<option value="请输入县">请输入县</option>
			</select><br>
	账号：<input type="text" name="user[]"><br>
	密码：<input type="text" name="psd[]"><br>
	分类：<select name="pid" id="">
			<option value="请输入">请输入</option>
			<?php if(is_array($list)): foreach($list as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>"><?php echo str_repeat("|-",$v['level']); ?> <?php echo ($vo["cd"]); ?></option><?php endforeach; endif; ?>
		</select><br>
	<input type="text" name="cd">
	性别：<input type="radio" name="use" value="男">男
		<input type="radio" name="use" value="女">女<br>
	<span id="cd"></span>
		<button>提交</button>

	</form>
	<input type="button" value="在来一条" onclick="qw()">
</body>
</html>
<script src="/Public/jquery.js"></script>
<script>

	function qw(){
		var str='账号：<input type="text" name="user[]"><br>密码：<input type="text" name="psd[]"><br>';
		$("#cd").append(str);

	}

	$("#sheng").change(function(){
		var id=$("#sheng").val();
		$.ajax({
			type:'POST',
			url:"<?php echo U('clcl');?>",
			data:{
				id:id,
				staus:1
			},
			success:function(a){
				$("#shi").html(a);
			}
		})
	})
		$("#shi").change(function(){
			var id=$("#shi").val();
			$.ajax({
				type:'POST',
				url:"<?php echo U('clcl');?>",
				data:{
					id:id,
					staus:0
				},
				success:function(a){
					$("#xian").html(a);
				}
			})
		})







</script>