<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/Public/images/favicon.png" type="image/png">

    <title>后台管理系统</title>

    <link href="/Public/css/style.default.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="signin">
<section>
  
    <div class="signinpanel">
        
        <div class="row">
            
            <div class="col-md-7">
                
                <div class="signin-info">
                    <div class="logopanel">
                        <h1><span>[</span> 后台管理系统 <span>]</span></h1>
                    </div><!-- logopanel -->
                
                    <div class="mb20"></div>
                
                    <p>
                        <img src="/Public/./images/admin-icon.png" width="300">
                    </p>
                </div><!-- signin0-info -->
            
            </div><!-- col-sm-7 -->
            
            <div class="col-md-5">
                
     
                    <h4 class="nomargin">登录</h4>
                    <p class="mt5 mb20"></p>
                
                    <input type="text" class="form-control uname" placeholder="用户名"  id="user" name="user" />
                    <input type="password" class="form-control pword" placeholder="密码"  id="psd" name="psd" />
                    <a href=""><small>Forgot Your Password?</small></a>
                    <button class="btn btn-success btn-block" onclick="qw()">立即登录</button>
                    
         
            </div><!-- col-sm-5 -->
            
        </div><!-- row -->
        
        <div class="signup-footer">
            <div class="pull-left">
                &copy; 2014. All Rights Reserved. Bracket Bootstrap 3 Admin Template
            </div>
        </div>
        
    </div><!-- signin -->
  
</section>

</body>
</html>
<script src="/Public/jquery.js"></script>
<script src="/Public/vue.js"></script>
<script>

        function qw(){
            var user=$("#user").val();
            var psd=$("#psd").val();
            $.ajax({
                type:'post',
                url:"<?php echo U('add');?>",
                data:{
                    user:user,
                    psd:psd
                },
                dataType:'json',
                success:function(a){
                    console.log(a);
                    if(a['code']==5){
                        alert("登陆成功");
                        window.location.href="<?php echo U('index');?>";
                    }else{
                        alert("账号或密码有误，请重新输入");
                    }
                }
            })


        }



</script>