<?php if (!defined('THINK_PATH')) exit();?><!-- 修改 -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>添加商品</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="__public__/mo/css/mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：商品管理-》添加商品信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="./admin.php?c=goods&a=showlist">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="<?php echo U('upload');?>" method="post" enctype="multipart/form-data">
            <table border="1" width="100%" class="table_a">
                <tr>
                	<input type="hidden" name="id" value="<?php echo ($info["id"]); ?>" />
                    <td>商品名称</td>
                    <td><input type="text" name="user" value="<?php echo ($info["user"]); ?>" /></td>
                </tr>
           
                <tr>
                    <td>商品价格</td>
                    <td><input type="text" name="jiage" value="<?php echo ($info["jiage"]); ?>" /></td>
                </tr>
                <tr>
                    <td>商品图片</td>
                    <td><input type="file" name="files" value='<?php echo ($info["files"]); ?>' />
			<img src="/Uploads/<?php echo ($info["files"]); ?>" width="100px" height="100px" />
                    </td>
                </tr>
                <tr>
                    <td>商品详细描述</td>
                    <td>
                      <textarea name="shang" value="<?php echo ($info["shang"]); ?>"></textarea>
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="修改">
                    </td>
                </tr>  
            </table>
            </form>
        </div>
        

    </body>
</html>
<script src="/Public/jquery.js"></script>
<script>

        $("#fen").change(function(){
            var id=$("#fen").val();

            $.ajax({
                type:'POST',
                url:"<?php echo U('clcl');?>",
                data:{
                    id:id
                },
                success:function(a){
                    $("#lei").html(a);

                }

            })



        })


</script>