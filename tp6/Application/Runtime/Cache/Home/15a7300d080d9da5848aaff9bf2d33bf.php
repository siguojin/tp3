<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            X-admin v1.0
        </title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="format-detection" content="telephone=no">
        <link rel="stylesheet" href="/Public/index/./css/x-admin.css" media="all">
    </head>
    <body>
        <div class="x-nav">
            <span class="layui-breadcrumb">
              <a><cite>首页</cite></a>
              <a><cite>会员管理</cite></a>
              <a><cite>权限规则</cite></a>
            </span>
            <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right"  href="javascript:location.replace(location.href);" title="刷新"><i class="layui-icon" style="line-height:30px">ဂ</i></a>
        </div>
        <div class="x-body">
            <form  action="<?php echo U('edd');?>" enctype="multipart/form-data" method="post">
                <div class="layui-form-pane" style="margin-top: 15px;">
                  <div class="layui-form-item">
                    <div class="layui-input-inline">
                        <select name="phon">
                            <option value="">请选择角色</option>
                            <?php if(is_array($infos)): foreach($infos as $key=>$vo): ?><option value="<?php echo ($vo["user"]); ?>"><?php echo ($vo["user"]); ?></option><?php endforeach; endif; ?>
                         
                        </select>
                    </div>
                    <div class="layui-input-inline">
                      <input type="text" name="user"  placeholder="模块/控制器/方法" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-input-inline">
                      <input type="text" name="csd"  placeholder="权限名称" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-input-inline">
                      <input type="file" name="files[]"  placeholder="头像" autocomplete="off" class="layui-input">
                    </div>
                      <div class="layui-input-inline">
                      <input type="file" name="files[]"  placeholder="头像" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-input-inline">
                      上架：<input type="radio" name="ad"   class="layui-input" value="1">
                        下架：<input type="radio" name="ad"   class="layui-input" value="2">
                    </div>
                    <div class="layui-input-inline" style="width:80px">
                        <button>提叫</button>
                    </div>
                  </div>
                </div> 
            </form>
            <xblock><button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon">&#xe640;</i>批量删除</button><span class="x-right" style="line-height:40px">共有数据：88 条</span></xblock>
            <table class="layui-table">
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" name="" value="">
                        </th>
                        <th>
                            ID
                        </th>
                        <th>
                            权限规则
                        </th>
                        <th>
                            权限名称
                        </th>
                        <th>
                            所属分类
                        </th>
                          <th>
                            头像
                        </th>
                        <th>
                                上架，下架
                        </th>
                        <th>
                            操作
                        </th>
                    </tr>
                </thead>
                <tbody id="x-link">
                <?php if(is_array($list)): foreach($list as $k=>$vo): ?><tr>
                        <td>
                            <input type="checkbox" value="<?php echo ($vo["cid"]); ?>" name="cd">
                        </td>
                        <td >
                     
                            <?php echo ($vo["cid"]); ?>
                        </td>
                        <!-- 一边点一边改 -->
                        <td  onclick="qw(<?php echo ($vo["cid"]); ?>)">
                         
                              <input type="text" style="display:none" value="<?php echo ($vo["phon"]); ?>" id="c<?php echo ($vo["cid"]); ?>" onblur="qc(<?php echo ($vo["cid"]); ?>)">
                              
                            <span id="s<?php echo ($vo["cid"]); ?>">  <?php echo ($vo["phon"]); ?></span>

                        </td>
                        <td>
                            <?php echo ($vo["user"]); ?>
                        </td>
                        <td>
                            <?php echo ($vo["csd"]); ?>
                        </td>
                        
                        <td>
                          
                          <?php if(is_array($vo["files"])): foreach($vo["files"] as $k=>$v): ?><img src="/Uploads/<?php echo ($v); ?>" width="100px" height="100px"><?php endforeach; endif; ?>
                        </td>
                            <td>
                            <?php echo ($vo["ads"]); ?>
                        </td>
                        <td class="td-manage">
                            <a title="编辑" href="<?php echo U(update,array('id'=>$vo['cid']));?>" onclick="rule_edit('编辑','rule-edit.html','4','','510')"
                            class="ml-5" style="text-decoration:none">
                                <i class="layui-icon">&#xe642;</i>
                            </a>
                            <a title="删除" href="<?php echo U(deletes,array('id'=>$vo['cid']));?>" onclick="rule_del(this,'1')" 
                            style="text-decoration:none">
                                <i class="layui-icon">&#xe640;</i>
                            </a>
                        </td>
                    </tr><?php endforeach; endif; ?>
                </tbody>
                <tr>
                        <td><select name="" id="sheng">
                                            <option value="请输入省">请输入省</option>
                                            <?php if(is_array($infoa)): foreach($infoa as $k=>$vo): ?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["users"]); ?></option><?php endforeach; endif; ?>
                                            
                        </select></td>
                </tr>
                <tr>
                        <td><select name="" id="shi">
                                            <option value="请输入市">请输入市</option>
                                            
                        </select></td>
                </tr>
                <tr>
                        <td><select name="" id="xian">
                                            <option value="请输入县">请输入县</option>
                                            
                        </select></td>
                </tr>



            </table>
            <div id="page"></div>
        </div>
        <script src="/Public/index/lib/layui/layui.js" charset="utf-8"></script>
        <script src="/Public/index/js/x-layui.js" charset="utf-8"></script>
        <script src="/Public/jquery.js"></script>
        <script>


        function qw(a){
            document.getElementById('c'+a).style.display="block";
            document.getElementById('s'+a).innerHTML="";
        }

        function qc(a){
            var id=a;
            var name=document.getElementById('c'+a).value;
            $.ajax({
                    type:'post',
                    url:"<?php echo U(save);?>",
                    data:{
                        id:id,
                        name,name
                    },
                    success:function(q){
                        if(q==1){                
                      document.getElementById('c'+a).style.display="none";
                      document.getElementById('s'+a).innerHTML=name;
                        }else{
                            alert('修改失败');
                        }



                    }
            })
        }


        $("#sheng").change(function(){
            var sid=$('#sheng').val();
            $.ajax({
                type:'POST',
                url:"<?php echo U(fdd);?>",
                data:{
                    sid:sid,
                    qd:0
                },
                success:function(a){
                    $("#shi").html(a);
                }

            })



        })

        $("#shi").change(function(){
            var sid=$('#shi').val();
            $.ajax({
                type:'POST',
                url:"<?php echo U(fdd);?>",
                data:{
                    sid:sid,
                    qd:1
                },
                success:function(a){
                    $("#xian").html(a);
                }

            })



        })



            //批量删除提交
             function delAll () {
                    var id=document.getElementsByName('cd');
                    var length=id.length;
                    var str="";
                    for(var i=0;i<length;i++){
                        if(id[i].checked){
                            str+=id[i].value+',';
                        }
                    }
                    $.ajax({
                        type:"POST",
                        url:"<?php echo U('dele');?>",
                        data:{
                            id:str
                        },
                        success:function(a){
                            if(a==1){
                                alert('删除成功');
                                window.location.href="<?php echo U('edd');?>";
                            }else{
                                alert('删除失败');
                            }
                        }

                    })
                   
             }
            
        
        </script>
    </body>
</html>