<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>需求：点击按钮一将底下对应文本框显示出来</h3>
	</br>
	<input type="button" id="clickbutton" value="按钮一"  onclick="qw()">
	<input type="text" id="c1" value="隐藏的文本框显示出来了" style="display: none" >
	</br>
	<h3>需求：点击按钮二将底下的p标签进行隐藏</h3>
	<input type="button" value="按钮二" onclick="qq()" >
	<p id="s1" >我是郝云</p>
	<h3>需求：点击按钮三实现对数据的取值</h3>
	<input type="text" id="name" placeholder="姓名">
	<input type="text" id="password" placeholder="密码">
	<input type="button" value="按钮三" onclick="qwe()">
	

	</br>
	<h3>需求：点击全选按钮实现数据全选</h3>
	<table>
		<tr>
			<td>
				<input type="checkbox" name="sg_id">1
				郝云
			</td>
			<td>
				<input type="checkbox" name="sg_id">2
				李宁旭
			</td>
		</tr>
		<tr>
			<td><input type="button" value="全选" onclick="qx()">
				<input type="button" value="反选" onclick="qs()" />
			</td>
		</tr>
	</table>
	<h3>需求：点击反选按钮实现数据反选</h3>



</body>
</html>
<script src="/Public/jquery.js"></script>
<script>
	function qw(){
	var id=document.getElementById('c1').style.display="block";

	}

	function qq(){
	var id=document.getElementById('s1').style.display="none";
	}

	function qwe(){
		var id=document.getElementById('name').value;
		var psd=document.getElementById('password').value;
		alert(id+psd);
	}

	function qx(){
		var id=document.getElementsByName('sg_id');
		var length=id.length;
		for(var i=0;i<length;i++){
			id[i].checked=true;
		}

	}
	function qs(){
		var id=document.getElementsByName('sg_id');
		var length=id.length;
		for(var i=0;i<length;i++){
			id[i].checked=false;
		}

	}

</script>