<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>评论插件</title>
<link rel="stylesheet" type="text/css" href="http://www.jq22.com/jquery/bootstrap-3.3.4.css">
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
	<form action="<?php echo U('examAdd');?>" method="post">
		<div class="commentbox">
			<textarea cols="80" rows="50" placeholder="来说几句吧......" class="mytextarea" id="content" name="content"></textarea>
			<!-- <div class="btn btn-info pull-right" id="comment">评论</div> -->
			<input type="submit" value="评论">
		</div>
	</form>
	
	<div class="comment-list">
		<?php if(is_array($list)): foreach($list as $k=>$vo): ?><div class="comment-info">
			<header><img src="/siguojin/Public/exam2/images/img.jpg"></header>
			<div class="comment-right">
				<h3><?php echo ($vo["username"]); ?></h3>
				<div class="comment-content-header"><span><i class="glyphicon glyphicon-time"></i> <?php echo ($vo["create_time"]); ?></span><span><i class="glyphicon glyphicon-map-marker"></i>深圳</span></div>
				<p class="content"><?php echo ($vo["comment"]); ?></p>
				<div class="comment-content-footer">
					<div class="row">
						<div class="col-md-10">
							<span><i class="glyphicon glyphicon-pushpin"></i> 来自:win10 </span><span><i class="glyphicon glyphicon-globe"></i> chrome 55.0.2883.87</span>
						</div>
						<div class="col-md-2"><span class="reply-btn">回复</span></div>
					</div>
				</div>
				<div class="reply-list"></div>
			</div>
		</div><?php endforeach; endif; ?>
		
	</div>
</div>

<script type="text/javascript" src="/siguojin/Public/exam2/js/jquery.min.js"></script>
<script type="text/javascript" src="/siguojin/Public/exam2/js/jquery.comment.js" ></script>
<script type="text/javascript" src="/siguojin/Public/exam2/js/bootstrap.min.js"></script>
</body>
</html>