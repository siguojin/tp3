<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5shiv.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/Public/index/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/index/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/Public/index/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/Public/index/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/Public/index/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>栏目管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页
	<span class="c-gray en">&gt;</span>
	系统管理
	<span class="c-gray en">&gt;</span>
	栏目管理
	<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<div class="page-container">
	<div class="text-c">
	
		<form action="<?php echo U(clcl);?>" method="post">
		<input type="text" name="cd" placeholder="搜索"><button>搜索</button>
		</form>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20">
		<span class="l">
		<input type="button"  value="批量删除" onclick="qw()">
		<a  href="<?php echo U(index);?>"><!-- <i class="Hui-iconfont">&#xe600;</i>  -->添加栏目</a>
		</span>
		<span class="r">共有数据：<strong>54</strong> 条</span>
	</div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-hover table-bg table-sort">
			<thead>
				<tr class="text-c">
					<th width="25"><input type="checkbox" name="" value=""></th>
					<th width="80">ID</th>
					
					<th>栏目名称</th>
					<th width="100">操作</th>
				</tr>
			</thead>
			<tbody>
			<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr class="text-c">
					<td><input type="checkbox" name="sid" value="<?php echo ($vo["id"]); ?>"></td>
					<td><?php echo ($vo["id"]); ?></td>
					<td class="text-l"><?php echo ($vo["user"]); ?></td>
					<td class="f-14"><a href="<?php echo U('update',array('id'=>$vo['id']));?>" >修改</a>
						<a title="删除" href="<?php echo U('delete',array('id'=>$vo['id']));?>" onclick="system_category_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr><?php endforeach; endif; ?>
			</tbody>
		</table>
	</div>
</div>

<script src="/Public/jquery.js"></script>
<script type="text/javascript">



	function qw(){
		var id=document.getElementsByName('sid');
		var length=id.length;
		var str=" ";
		for (var i = 0; i < length; i++) {
			if(id[i].checked){
				str+=id[i].value+',';
			}
		}
		$.ajax({
			type:"POST",
			url:"<?php echo U('dll');?>",
			data:{
				id:str
			},
			success:function(a){
				if(a==1){
					alert('删除成功');
					window.location.href="<?php echo U('add');?>";
				}
			}

		})
	}

</script>
</body>
</html>