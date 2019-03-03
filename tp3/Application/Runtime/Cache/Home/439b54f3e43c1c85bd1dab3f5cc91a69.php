<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
            <form action="<?php echo U('add');?>" method="post" enctype="multipart/form-data">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>商品名称</td>
                    <td><input type="text" name="user" /></td>
                </tr>
                <tr>
                    <td>商品分类</td>
                    <td>
                       
                        <select name="fen" id="fen">
                            <option value="0">请选择</option>
                          <?php if(is_array($info)): foreach($info as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["user"]); ?></option><?php endforeach; endif; ?>
                        </select>

                    </td>
                </tr>
                <tr>
                    <td>商品品牌</td>
                    <td>

                        <select name="lei" id="lei">
                            <option value="0">请选择</option>
                        </select>


                    </td>
                </tr>
                <tr>
                    <td>商品价格</td>
                    <td><input type="text" name="jiage" /></td>
                </tr>
                <tr>
                    <td>商品图片</td>
                    <td><input type="file" name="files" /></td>
                </tr>
                <tr>
                    <td>商品详细描述</td>
                    <td>
                        <textarea name="shang"></textarea>
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="添加">
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