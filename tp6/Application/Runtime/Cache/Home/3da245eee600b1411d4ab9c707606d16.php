<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>DouPHP 管理中心 - 设置权限 </title>
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
<div id="urHere">DouPHP 管理中心<b>></b><strong>设置权限</strong> </div>   <div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="<?php echo U('showRole');?>" class="actionBtn">返回列表</a>设置权限</h3>
            <form action="<?php echo U('setPrivileges');?>" method="post">
     <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <input type="hidden" name="rid" value="<?php echo ($id); ?>">
      <tr>
       <td width="100" align="right">选择权限</td>
       <td>
        
        <?php if(is_array($info)): foreach($info as $k=>$vo): ?><input type="checkbox" name="pname[]" size="40"  value="<?php echo ($vo["rid"]); ?>"
            <?php if(in_array($vo['rid'],$array)){ echo "checked"; }?>
          />
          <?php echo ($vo["id"]); ?>-<?php echo ($vo["role_name"]); ?></br><?php endforeach; endif; ?>
       </td>
      </tr>      
      </tr>
       <td>
        <input type="submit" class="btn" value="提交" />
       </td>
     </table>
     
    </form>
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