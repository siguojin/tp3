<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>评论插件</title>
<link rel="stylesheet" type="text/css" href="/Public/http://www.jq22.com/jquery/bootstrap-3.3.4.css">
<style>
	.container{
		width: 1000px;
	}
	.commentbox{
		width: 900px;
		margin: 20px auto;
	}
	.mytextarea {
	    width: 100%;
	    overflow: auto;
	    word-break: break-all;
	    height: 100px;
	    color: #000;
	    font-size: 1em;
	    resize: none;
	}
	.comment-list{
		width: 900px;
		margin: 20px auto;
		clear: both;
		padding-top: 20px;
	}
	.comment-list .comment-info{
		position: relative;
		margin-bottom: 20px;
		margin-bottom: 20px;
		border-bottom: 1px solid #ccc;
	}
	.comment-list .comment-info header{
		width: 10%;
		position: absolute;
	}
	.comment-list .comment-info header img{
		width: 100%;
		border-radius: 50%;
		padding: 5px;
	}
	.comment-list .comment-info .comment-right{
		padding:5px 0px 5px 11%; 
	}
	.comment-list .comment-info .comment-right h3{
		margin: 5px 0px;
	}
	.comment-list .comment-info .comment-right .comment-content-header{
		height: 25px;
	}
	.comment-list .comment-info .comment-right .comment-content-header span,.comment-list .comment-info .comment-right .comment-content-footer span{
		padding-right: 2em;
		color: #aaa;
	}
	.comment-list .comment-info .comment-right .comment-content-header span,.comment-list .comment-info .comment-right .comment-content-footer span.reply-btn,.send,.reply-list-btn{
		cursor: pointer;
	}
	.comment-list .comment-info .comment-right .reply-list {
		border-left: 3px solid #ccc;
		padding-left: 7px;
	}
	.comment-list .comment-info .comment-right .reply-list .reply{
		border-bottom: 1px dashed #ccc;
	}
	.comment-list .comment-info .comment-right .reply-list .reply div span{
		padding-left: 10px;
	}
	.comment-list .comment-info .comment-right .reply-list .reply p span{
		padding-right: 2em;
		color: #aaa;
	}
</style>
</head>
<body>

<div class="container">	
			<select name="sheng" id="sheng">
				<option value="请输入省">请输入省</option>
				<?php if(is_array($infos)): foreach($infos as $key=>$vo): ?><option value="<?php echo ($vo["pid"]); ?>"><?php echo ($vo["users"]); ?></option><?php endforeach; endif; ?>
			</select>
			<select name="shi" id="shi">
				<option value="请输入市">请输入市</option>
			</select>
			<select name="xian" id="xian">
				<option value="请输入县">请输入县</option>
			</select>

	<div class="commentbox">
		<textarea cols="80" rows="50" placeholder="来说几句吧......" class="mytextarea" id="content"></textarea>
		<a href="<?php echo U('add');?>"><div class="btn btn-info pull-right" id="comment">评论</div></a>
	</div>
	<div class="comment-list">

		
		<div class="comment-info">
			
				<div class="reply-list">
				<?php if(is_array($info)): foreach($info as $key=>$vo): ?><div class="reply">
						<div><a href="javascript:void(0)"><img src="/Uploads/<?php echo ($vo["files"]); ?>" width="50px" height="50px"></a>:<a href="javascript:void(0)"><?php echo ($vo["user"]); ?></a><br>
						<span><?php echo ($vo["date"]); ?></span></div>
						<p><span><?php echo ($vo["names"]); ?></span> 

					</div><?php endforeach; endif; ?>
						<?php echo ($page); ?>
				</div>
			</div><a href="<?php echo ('loacd');?>">退出</a>
		</div>
			
		
		
		
	</div>
</div>




</body>
</html>
<script src="/Public/jquery.js"></script>
<script>


	$("#sheng").change(function(){

		var sid=$("#sheng").val();
		$.ajax({
			type:'POST',
			url:"<?php echo U('clcl');?>",
			data:{
				sid:sid
			},
			success:function(a){
				$("#shi").html(a);
			}

		})


	})


</script>