<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
                    <a style="text-decoration: none;" href="<?php echo U('add');?>">【添加商品】</a>
                </span>
            </span>
        </div>
        <div></div>
        <div class="div_search">
            <span>
                <form action="<?php echo U('sou');?>" method="get">
                    品牌<select name="sou" style="width: 100px;">
                        <option selected="selected" value="0">请选择</option>
                       <?php if(is_array($data)): foreach($data as $key=>$vo): ?><option   value="<?php echo ($vo["user"]); ?>"><?php echo ($vo["user"]); ?></option><?php endforeach; endif; ?>   
                    </select>
                    <input value="查询" type="submit" />
                </form>
            </span>
        </div>
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody><tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>商品名称</td>
                        <td>价格</td>
                        <td>图片</td>
                        <td>品牌</td>
                        <td>创建时间</td>
                        <td align="center">操作</td>
                    </tr>
                    <?php if(is_array($info)): foreach($info as $key=>$vo): ?><tr id="product1">
                        <td><input type="checkbox" name="cd" value="<?php echo ($vo["id"]); ?>"/><?php echo ($vo["id"]); ?></td>
                        <td><a href="#"><?php echo ($vo["user"]); ?></a></td>
                        <td><?php echo ($vo["jiage"]); ?></td>
                        <td><img src="/Uploads/<?php echo ($vo["files"]); ?>" height="60" width="60"></td>
                        <td><?php echo ($vo["fen"]); echo ($vo["lei"]); ?></td>
                        <td><?php echo ($vo["date"]); ?></td>
                        <td><a href="<?php echo U('update',array('id'=>$vo['id']));?>">修改</a>
                        <a href="<?php echo U('delete',array('id'=>$vo['id']));?>" >删除</a></td>
               
                    </tr><?php endforeach; endif; ?>
                        <td colspan="20" style="text-align: center;">
                            [1]
                        </td>
                    </tr>
                </tbody>
            </table>
            <input type="submit" value="选中删除" onclick="qw()" />
        </div>
    </body>
</html>
<script src="/Public/jquery.js"></script>
<script>
        function qw(){
            

            
        }



</script>