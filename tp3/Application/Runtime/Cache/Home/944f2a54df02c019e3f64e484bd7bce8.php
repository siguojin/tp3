<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Amaze UI Admin index Examples</title>
  <meta name="description" content="这是一个 index 页面">
  <meta name="keywords" content="index">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="/Public/assets/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="/Public/assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="/Public/assets/css/amazeui.min.css" />
  <link rel="stylesheet" href="/Public/assets/css/admin.css">
  <link rel="stylesheet" href="/Public/assets/css/app.css">
</head>

<body data-type="login">

  <div class="am-g myapp-login">
	<div class="myapp-login-logo-block  tpl-login-max">
		<div class="myapp-login-logo-text">
			<div class="myapp-login-logo-text">
				Amaze UI<span> Login</span> <i class="am-icon-skyatlas"></i>
				
			</div>
		</div>

		<div class="login-font">
			<i>Log In </i> or <span> Sign Up</span>
		</div>
		<div class="am-u-sm-10 login-am-center">
			<form class="am-form">
				<fieldset>
					<div class="am-form-group">
						<input type="text" class="user" id="doc-ipt-email-1" placeholder="输入手机号">
					</div>
					<div class="am-form-group">
						<input type="password" class="psd" id="doc-ipt-pwd-1" placeholder="设置个密码吧">
					</div>
					<p><button type="button" class="am-btn am-btn-default" onclick="login()">登录</button></p>
				</fieldset>
			</form>
		</div>
	</div>
</div>

 
</body>

</html>

<script src='/Public/jquery.js'></script>
<script>

function login(){

	var user=$('.user').val();
	var psd=$('.psd').val();
	$.ajax({
		type:"POST",
		url:"<?php echo U('dl');?>",
		data:{
			user:user,
			psd:psd
		},
		success:function(e){
			if(e==1){
				alert('登陆成功');
				window.location.href="<?php echo U('show');?>";

			}
			if(e==2){
				alert('密码错误');
				window.location.href="<?php echo U('login');?>";

			}
			if(e==3){
				alert('无此用户');
				window.location.href="<?php echo U('register');?>";

			}

		}

	})
	


}
</script>