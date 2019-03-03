<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table>
		<form action="<?php echo U('insert');?>" method="post" enctype="multipart/form-data">
			<tr>
				<td>轮播图名称：</td>
				<td><input type="text" name="users"></td>
			</tr>
			<tr>
				<td>轮播图地址：</td>
				<td><input type="text" name="emali"></td>
			</tr>
			<tr>
				<td>轮播图：</td>
				<div id="qc"><td><input type="file" name="files[]"></td></div>
				<td><input type="file" name="files[]"></td>
				<td><input type="button" value="再来一条" onclick="qw()"></td>
			</tr>
			<tr>
				<td>轮播图排序：</td>
				<td><input type="text" name="nubmer"></td>
			</tr>
			<tr>
				<td>轮播图状态：</td>
				<td><input type="radio" name="block" value="显示">显示
				      <input type="radio" name="block" value="不显示">不显示</td>

			</tr>
				<td><button>提交</button></td>
				
      
			</tr>
	
		</form>


		<select name="" id="sheng">
			<option value="请输入省">请输入省</option>
			<?php if(is_array($info)): foreach($info as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["users"]); ?></option><?php endforeach; endif; ?>
		</select>
		<select name="" id="shi">
			<option >请输入市</option>
		</select>
		<select name="" id="xian">
			<option>请输入县</option>
		</select>
	</table>

	
</body>
</html>
<script src="/Public/jquery.js"></script>
<script>
	$('#sheng').change(function(){
		var sid=$('#sheng').val();
		$.ajax({
			type:'POST',
			url:"<?php echo U('edd');?>",
			data:{
				sid:sid
			},
			success:function(e){
				$('#shi').html(e);
			}
		})
	})
		$('#shi').change(function(){
		var sid=$('#shi').val();
		$.ajax({
			type:'POST',
			url:"<?php echo U('edd');?>",
			data:{
				sid:sid
			},
			success:function(e){
				$('#xian').html(e);
			}
		})
	})
</script>