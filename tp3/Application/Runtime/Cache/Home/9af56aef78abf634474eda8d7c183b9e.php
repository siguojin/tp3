<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('sou');?>" method="get">
	<input type="text" name="sou" ><button>搜索</button>

	</form>
	<select name="" id="pid">
	<?php if(is_array($list)): foreach($list as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>"><?php echo str_repeat('&nbsp;',$v['level']*3);?>
		<?php echo ($vo["user"]); ?></option><?php endforeach; endif; ?>
	</select>
	<table border="1px" cellspacing="0">
	<th>id</th>
	<th>管理员</th>
	<th>密码</th>
	<th>性别</th>
	<th>手机</th>
	<th>邮箱</th>
	<th>角色</th>
	<th>备注</th>
	<th>操作</th>
	<?php if(is_array($info)): foreach($info as $key=>$vo): ?><tr>	<td><?php echo ($vo["id"]); ?></td>
		<td onclick="qw(<?php echo ($vo["id"]); ?>)">	
<input type="text" id="c<?php echo ($vo["id"]); ?>" style="display: none" value="<?php echo ($vo["user"]); ?>" onblur="q(<?php echo ($vo["id"]); ?>)">
		<span id="s<?php echo ($vo["id"]); ?>"><?php echo ($vo["user"]); ?></span>

		</td>
		<td><?php echo ($vo["pwd"]); ?></td>
		<td><?php echo ($vo["cs"]); ?></td>
		<td><?php echo ($vo["phon"]); ?></td>
		<td><?php echo ($vo["cd"]); ?></td>
		<td><?php echo ($vo["you"]); ?></td>
		<td><?php echo ($vo["bei"]); ?></td>
		<td><a href="<?php echo U('delete',array('id'=>$vo['id']));?>">删除</a>
			<a href="<?php echo U('update',array('id'=>$vo['id']));?>">修改</a>
		</td>
	</tr><?php endforeach; endif; ?>
	</table>
	
</body></html>
<script src="/Public/jquery.js"></script>
<script>

	function qw(a){
		document.getElementById('c'+a).style.display='block';
		document.getElementById('s'+a).innerHTML="";

	}
	function q(a){
		var id=a;
		var name=document.getElementById('c'+a).value;
		$.ajax({
			type:'POST',
			url:"<?php echo U('clcl');?>",
			data:{	
				id:id,
				name:name
			},
			success:function(a){
				if(a==1){
		document.getElementById('c'+a).style.display='block';
		document.getElementById('s'+a).innerHTML="";
				}
			}

		})

	}


</script>