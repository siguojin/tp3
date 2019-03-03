<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<!-- 搜索 -->
	<form action="<?php echo U('dldl');?>" method="get">
	<input type="text" name="sou"><br>
	<button>搜索</button>
	</form>
	<table border="1px" cellspacing="0">
		<th>id</th>
		<th>账号</th>
		<th>密码</th>
		<th>地区</th>
		<th>分类</th>
		<th>性别</th>
		<th>操作</th>
		<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>	<td><input type="checkbox" name="ct" value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["id"]); ?></td>
				<td onclick="qw(<?php echo ($vo["id"]); ?>)">
<input type="text" style="display: none" id="c<?php echo ($vo["id"]); ?>" value="<?php echo ($vo["user"]); ?>" onblur="q(<?php echo ($vo["id"]); ?>)"> 
<span id="q<?php echo ($vo["id"]); ?>" ><?php echo ($vo["user"]); ?></span>
				</td>
				<td><?php echo ($vo["psd"]); ?></td>
				<td><?php echo ($vo["di"]); ?></td>
				<td><?php echo ($vo["cd"]); ?></td>
				<td><?php echo ($vo["use"]); ?></td>
				<td><a href="">删除</a></td>
			</tr><?php endforeach; endif; ?>
		<?php echo ($page); ?>
	</table>
</body>
<input type="button" value="选中删除" onclick="tu()">
</html>
<script src="/Public/jquery.js"></script>
<script>
	function qw(a){
		document.getElementById('c'+a).style.display='block';//显示
		document.getElementById('q'+a).innerHTML="";//隐藏

	}

	function q(a){
		var id=a;//获取传过来的id
		var name=document.getElementById('c'+a).value;//用id取值
		$.ajax({
			type:'POST',
			url:"<?php echo U('ty');?>",
			data:{
				id:id,
				name:name
			},
			success:function(a){
				if(a==1){
		document.getElementById('c'+a).style.display='block';
		document.getElementById('q'+a).innerHTML="";
				}else{
					alert("失败");
				}
			}
		})
	}

	function tu(){
		var id=document.getElementsByName('ct');
		var length=id.length;
		var str="";
		for(var i=0;i<length;i++){
			if(id[i].checked){
				str+=id[i].value+',';
			}
		}
		$.ajax({
			type:'POST',
			url:"<?php echo U('deles');?>",
			data:{
				id:str
			},
			success:function(a){
				if(a==1){
					alert('删除成功');
					window.location.href="<?php echo U('bdd');?>";

				}else{
					alert("删除失败");
				}
			}
		})
	}


</script>