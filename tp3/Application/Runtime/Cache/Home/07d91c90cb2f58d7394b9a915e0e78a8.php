<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>会员列表</title>

        <link href="./css/mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            .tr_color{background-color: #9F88FF}
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：商品管理-》商品列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="#">【添加商品】</a>
                </span>
            </span>
        </div>
        <div></div>
        <div class="div_search">
            <span>
                <form action="<?php echo U('sou');?>" method="get">
                                <input type="text" name="sou" value="<?php echo I('get.so')?>" />
                        <input value="查询" type="submit" />
                </form>
            </span>
        </div>
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody><tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>商品名称</td>
                        <td>库存</td>
                        <td>价格</td>
                        <td>图片</td>
                        <td>缩略图</td>
                        <td>品牌</td>
                        <td>创建时间</td>
                        <td align="center">操作</td>
                    </tr>
                    <?php if(is_array($info)): foreach($info as $key=>$v): ?><tr id="product1">
                        <td><input type="checkbox" name="cd" value="<?php echo ($v["id"]); ?>" /><?php echo ($v["id"]); ?></td>
                        <td><a href="#"><?php echo ($v["user"]); ?></a></td>
                        <td><?php echo ($v["names"]); ?></td>
                        <td><?php echo ($v["pins"]); ?></td>
                        <td><img src="/Uploads/<?php echo ($v["files"]); ?>" height="60" width="60"></td>
                        <td><?php echo ($v["jia"]); ?></td><td><?php echo ($v["miao"]); ?></td>
                        <td><a href="#">修改</a></td>
                        <td><a href="javascript:;" onclick="delete_product(1)">删除</a></td>
                    </tr><?php endforeach; endif; ?>
                    <tr>
                        <td colspan="20" style="text-align: center;">
                            [1]
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>
<input type="button"  onclick="qw()" value="选中删除"/>
<input type="button" onclick="w()" value="反选" />
<input type="button" onclick="e()" value="全选" />
<script src="/Public/jquery.js"></script>
<script>
// 选中删除
        function qw(){
            var id=document.getElementsByName('cd');//赋值
            var length=id.length;//算出他的长度
            var str=" ";//给他个空字符串
            for (var i=0;i< length; i++) 
            }
            $.ajax(",//跳的方法
                data:,
                success:function(a)";
                        }else{
                            alert("选中删除失败");
                        }
                }
            })
        }

// 反选
        function w(){
            var id=document.getElementsByName('cd');//赋值
            var length=id.length;//长度
            for(var i=0;i<length;i++){
                id[i].checked=false;//选中他时候是false
            }
        }
// 全选
        
        function e(){
             var id=document.getElementsByName('cd');//赋值
             var length=id.length;//长度
             for(var i=0;i<length;i++){
                id[i].checked=true;//全选
            }
        }
</script>