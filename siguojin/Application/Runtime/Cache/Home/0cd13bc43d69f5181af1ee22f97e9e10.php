<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
        <form action="<?php echo U('role_add');?>" method="post" enctype="multipart/form-data">
            
            <table>
                        <tr>
                                <td>姓名：</td>
                                <td><input type="text" name="user[]"></td>
                                <span id="user"></span>
                        </tr>
                        <tr>
                                <td>密码：</td>
                                <td><input type="password" name="psd[]"></td>
                                <span id="psd"></span>
                        </tr>
                         <tr>
                                <td>头像：</td>
                                <td><input type="file" name="files[]"></td>
                                <span id="cd"></span>
                        </tr>
                              <select name="sheng" id="sheng">
                        <option value="请输入省">请输入省</option> 
                        <?php if(is_array($info)): foreach($info as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["users"]); ?></option><?php endforeach; endif; ?>       
                  </select>
                   <select name="shi" id="shi">
                        <option value="请输入市">请输入市</option>        
                  </select>
                   <select name="xian" id="xian">
                        <option value="请输入县">请输入县</option>        
                  </select>
                         <tr>
                                <td>   <button>提交</button></td>
                                
                        </tr>                 
            </table>
        </form>  

          <tr>
                     <td><input type="submit" onclick="qw()" value="来一条"></td>
          </tr>
          
</body>
</html>
<script src="/Public/jquery.js"></script>
<script>

    function qw(){
        var str=' <tr> <td>头像：</td><td><input type="file" name="files[]"></td>  </tr>';
        var user='<tr> <td>姓名：</td><td><input type="text" name="user[]"></td></tr>';
        var psd='  <tr><td>密码：</td><td><input type="password" name="psd[]"></td></tr>'
        $("#cd").append(str);
         $("#user").append(user);
          $("#psd").append(psd);
    } 

    $("#sheng").change(function(){
        var sid=$("#sheng").val();
        $.ajax({
                type:'POST',
                url:"<?php echo U('clcl');?>",
                data:{
                    sid:sid,
                },
                success:function(a){
                        $("#shi").html(a);
                }

        })

    })
        $("#shi").change(function(){
        var sid=$("#shi").val();
        $.ajax({
                type:'POST',
                url:"<?php echo U('clcl');?>",
                data:{
                    sid:sid,
                    cd:0
                },
                success:function(a){
                        $("#xian").html(a);
                }

        })

    })

    

</script>