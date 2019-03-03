<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <select name="" id="sheng">
        <option value="">请选择省</option>
        <?php if(is_array($info)): foreach($info as $k=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["users"]); ?></option><?php endforeach; endif; ?>
    </select>
    <select name="" id="shi">
     <option value="">请选择市</option>
    </select>
    <select name="" id="xian">
     <option value="">请选择县</option>

    </select>
</body>
</html>
<script src="/Public/jquery.js"></script>
<script>

    $("#sheng").change(function(){
        //去省长的值
        var sid=$("#sheng").val();
        $.ajax({
            type:'POST',
            url:"<?php echo U('bdd');?>",
            data:{
                sid:sid
            },
            success:function(e){
                    $("#shi").html(e);
            }
        })
    })

     $("#shi").change(function(){
        //去省长的值
        var sid=$("#shi").val();
        $.ajax({
            type:'POST',
            url:"<?php echo U('cdd');?>",
            data:{
                sid:sid
            },
            success:function(e){
                    $("#xian").html(e);

            }

        })
    })



</script>