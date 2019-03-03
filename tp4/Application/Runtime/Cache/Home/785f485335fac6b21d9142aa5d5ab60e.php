<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1">
		<th><input type="checkbox" onclick="checkAll1()">编号</th>
		<th>商品名称</th>
		<th>商品货号</th>
		<th>商品图片</th>
		<th>操作</th>
	<?php if(is_array($list)): foreach($list as $k=>$vo): ?><tr>
			<td><input type="checkbox" name="sg_id" value="<?php echo ($vo["sid"]); ?>" class="all"><?php echo ($vo["sid"]); ?></td>
			<td><?php echo ($vo["shop_name"]); ?></td>
			<td><?php echo ($vo["shop_number"]); ?></td>
			<td><img src="/Uploads/<?php echo ($vo["shop_image"]); ?>" width="50px" height="60px"></td>
			<td><a href="<?php echo U('delete',array('sid'=>$vo['sid']));?>">删除</a></td>
		</tr><?php endforeach; endif; ?>
	</table>
	<?php echo ($page); ?>
	<input type="button" value="批量删除" onclick="delall()">
	<input type="button" value="全选" onclick="checkAll()">
	<input type="button" value="全选1" class="nocheckAll">
	<input type="button" value="反选1" class="nocheckAlls">
	<input type="button" value="全选一" onclick="checkAll1()">
</body>
</html>
<script src="/Public/jquery.js"></script>
<script type="text/javascript">
	//批量删除对应事件
	function delall(){
		var str="";//定义一个控制 用来拼接复选框中获取到的值
		//定义一个变量 获取复选框的元素
		var id=document.getElementsByName('sg_id');
		//定义一变量 获取长度 目的：搞清楚有几个复选框
		var length=id.length;
		//利用for循环实现数据拼接
		for(var i =0;i<length;i++){
			if(id[i].checked){
				str+=id[i].value+',';
			}
		}
		//利用ajax实现参数的传递
		$.ajax({
			type:"POST",
			url:"<?php echo U('delalls');?>",
			data:{
				id:str
			},
			success:function(a){
				if(a==1){
					alert("删除成功");
					window.location.href="<?php echo U('examShow');?>";
				}else{
					alert("删除失败");
				}
			}
		})
	}
	//全选反选
	function checkAll1(){
		var id = document.getElementsByName('sg_id');
		var length=id.length;
		for(var i=0;i<length;i++){
			if(id[i].checked){
				id[i].checked=false;
			}else{
				id[i].checked=true;
			}
		}
	}
	function checkAll(){
		var str="";//定义一个空的变量
		// 1.获取checkbox中所对应的元素 根据name取
		var id=document.getElementsByName('sg_id');//根据name值获取到复选框的元素
		var length=id.length;//获取长度
		//for循环 判断复选框中的值
		for(var i=0;i<length;i++){
			id[i].checked=true;
		}
	}
	$(document).on('click','.nocheckAll',function(){
		$(".all").prop("checked",true);
	})
	$(document).on('click','.nocheckAlls',function(){
		$(".all").prop("checked",false);
	})
</script>