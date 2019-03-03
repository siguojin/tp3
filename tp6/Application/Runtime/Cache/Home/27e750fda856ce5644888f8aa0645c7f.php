<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div id="app">
		<table border="1px" cellspacing="0">
			<th>id</th>
			<th>账号</th>
			<th>密码</th>
			<th>操作</th>
				<tr v-for="v in info">
					<td><input type="checkbox" name="cd" v-bind:value="v.id">{{v.id}}</td>
					<td>{{v.user}}</td>
					<td>{{v.psd}}</td>
					<td><a v-on:click="qw(v.id)" v-bind:value="v.id">删除</a></td>
				</tr>
		</table>	

	</div>
	<input type="button" onclick="wq()" value="选中删除">
	<script src="/Public/jquery.js"></script>
	<script src="/Public/vue.js"></script>
	<script>
	var siguojin=new Vue({
		el:"#app",
		data:{
			info:{}
		},
		created:function(){
			this.wei();
		},
		methods:{
			wei:function(){
				var that=this;
				$.ajax({
					type:"get",
					url:"<?php echo U('edd');?>",
					dataType:"json",
					success:function(a){
						console.log(a);
						that.info=a;
					}
				})
			}
		}
	})

	function qw(id){
		$.ajax({
			type:"post",
			url:"<?php echo U('cl');?>",
			data:{
				id:id
			},
			dataType:"json",
			success:function(a){
				if(a['code']==1){
					alert("删除成功");
					window.location.href="<?php echo U('cdd');?>";
				}else{
					alert("删除失败")
				}
			}
		})
	}


	function wq(){
		var id=document.getElementsByName('cd');
		var length=id.length;
		var str="";
		for(var i=0;i<id.length;i++){
			if(id[i].checked){
				str+=id[i].value+',';
			}
		}
		$.ajax({
			type:"post",
			url:"<?php echo U('clcl');?>",
			data:{
				id:str
			},
			success:function(a){
				console.log(a);
			}
		})

	}

	</script>
</body>
</html>