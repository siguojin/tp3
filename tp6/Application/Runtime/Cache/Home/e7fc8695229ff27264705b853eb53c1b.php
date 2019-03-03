<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>DouPHP 管理中心 - 角色管理 </title>
<meta name="Copyright" content="Douco Design." />
<link href="/Public/admin/css/public.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/Public/admin/js/jquery.min.js"></script>
<script type="text/javascript" src="/Public/admin/js/global.js"></script>
</head>
<body>
   <div id="dcWrap">
 <div id="dcHead">
 <div id="head">
  <div class="logo"><a href="index.html"><img src="images/dclogo.gif" alt="logo"></a></div>
  <div class="nav">
   <ul>
    <li class="M"><a href="JavaScript:void(0);" class="topAdd">新建商品</a>
     <div class="drop mTopad"><a href="product.php?rec=add">商品</a> <a href="article.php?rec=add">文章</a> <a href="nav.php?rec=add">自定义导航</a> <a href="show.html">首页幻灯</a> <a href="page.php?rec=add">单页面</a> <a href="manager.php?rec=add">管理员</a> <a href="link.html"></a> </div>
    </li>
    <li><a href="../index.php" target="_blank">查看站点</a></li>
    <li><a href="index.php?rec=clear_cache">清除缓存</a></li>
    <li><a href="http://help.douco.com" target="_blank">帮助</a></li>
    <li class="noRight"><a href="module.html">DouPHP+</a></li>
   </ul>
   <ul class="navRight">
    <li class="M noLeft"><a href="JavaScript:void(0);">您好，admin</a>
     <div class="drop mUser">
      <a href="manager.php?rec=edit&id=1">编辑我的个人资料</a>
      <a href="manager.php?rec=cloud_account">设置云账户</a>
     </div>
    </li>
    <li class="noRight"><a href="login.php?rec=logout">退出</a></li>
   </ul>
  </div>
 </div>
</div>
<!-- dcHead 结束 --> 
  <div id="dcLeft"><div id="menu">
 <ul class="top">
  <li><a href="<?php echo U('User/showUser');?>"><i class="home"></i><em>用户管理</em></a></li>
 </ul>
 <ul>
  <li><a href="<?php echo U('Roles/showRole');?>"><i class="system"></i><em>角色管理</em></a></li>
 </ul>
   <ul>
  <li><a href="<?php echo U('Privileges/show');?>"><i class="productCat"></i><em>权限管理</em></a></li>
 </ul>
 <ul>
  <li><a href="<?php echo U('Category/category_add');?>"><i class="productCat"></i><em>分类管理 </em></a></li>
 </ul>
 <ul>
  <li><a href="<?php echo U('Shop/insert');?>"><i class="productCat"></i><em>商品管理 </em></a></li>
 </ul>
  <ul>
  <li><a href="<?php echo U('diqu/demo');?>"><i class="productCat"></i><em>地址管理 </em></a></li>
 </ul>
   <ul>
  <li><a href="<?php echo U('Lunbo/add');?>"><i class="productCat"></i><em>轮播管理 </em></a></li>
 </ul>
 <ul>
  <li><a href="<?php echo U('Zhuce/add');?>"><i class="productCat"></i><em>注册管理 </em></a></li>
 </ul>
 <ul>
  <li><a href="<?php echo U('Ym/index');?>"><i class="productCat"></i><em>商城页面管理 </em></a></li>
 </ul>
</div></div> 
 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心<b>></b><strong>角色管理</strong> </div>   <div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="<?php echo U('addRole');?>" class="actionBtn">添加角色</a>角色管理</h3>
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
     <tr>
      <form action="<?php echo U('showRole');?>" method="get">
           <input type="text" name="search" placeholder ="请输入角色名称">
            <input type="submit" value="搜索">
      </form>
     
      <th width="30" align="center">编号</th>
      <th align="left">角色名称</th>
       <th align="left">创建时间</th>
        <th align="left">角色状态</th>
      <th align="center">操作</th>
     </tr>
     
     <?php if(is_array($info)): foreach($info as $k=>$vo): ?><tr>
      <td align="center"><?php echo ($vo["rid"]); ?></td>
      <td onclick="updaterole(<?php echo ($vo["rid"]); ?>)">
            <input type="text" style="display: none" id="c<?php echo ($vo["rid"]); ?>" value="<?php echo ($vo["role_name"]); ?>" onblur="updatename(<?php echo ($vo["rid"]); ?>)">
            <span id="s<?php echo ($vo["rid"]); ?>">  <?php echo ($vo["role_name"]); ?></span>
        
      </td>
      <td><?php echo ($vo["create_time"]); ?></td>
      <td>
      	<?php if($vo['status'] == 1 ): ?>允许使用<?php else: ?> 禁止使用<?php endif; ?>
      </td>
      <td align="center">
        <a href="<?php echo U('seting',array('id'=>$vo['rid']));?>">设置权限</a> | 
        <a href="<?php echo U('userUpdate',array('id'=>$vo['id']));?>">编辑</a> | 
        <a href="<?php echo U('userDelete',array('id'=>$vo['id']));?>">删除</a></td>
     </tr><?php endforeach; endif; ?>

         </table>
         <?php echo ($page); ?>
                       </div>
 </div>
 <div class="clear"></div>
<div id="dcFooter">
 <div id="footer">
  <div class="line"></div>
  <ul>
   版权所有 © 2013-2015 漳州豆壳网络科技有限公司，并保留所有权利。
  </ul>
 </div>
</div><!-- dcFooter 结束 -->
<div class="clear"></div> </div>
</body>
</html>
<script src="/Public/jquery.js"></script>
<script>
          function updaterole(a){
            // alert(a);
              document.getElementById('c'+a).style.display="block";//将文本框显示出来
              document.getElementById('s'+a).innerHTML=" ";//将多余的显示出来
          }
          function updatename(a){
                  var id=a;
                  var name=document.getElementById('c'+a).value;
                $.ajax({
                    type:'POST',
                    url:"<?php echo U('saveroles');?>",
                    data:{
                      id:id,
                      names:name
                    },
                    success:function(q){
                        if(q==1){
                               document.getElementById('c'+a).style.display="none";//将文本框显示出来
                               document.getElementById('s'+a).innerHTML=name;//将多余的显示出来
                               alert('修改成功');
                               window.location.href="<?php echo U(showRole);?>";
                        }else{
                          alert('修改失败');
                        }
                    }


                })
          }
</script>