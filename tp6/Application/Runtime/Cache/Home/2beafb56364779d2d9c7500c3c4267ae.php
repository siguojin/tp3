<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>DouPHP 管理中心 - 添加商品 </title>
<meta name="Copyright" content="Douco Design." />
<link href="/Public/admin/css/public.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/Public/admin/js/jquery.min.js"></script>
<script type="text/javascript" src="/Public/admin/js/global.js"></script>
<script type="text/javascript" src="/Public/admin/js/jquery.autotextarea.js"></script>
</head>
<body>
<div id="dcWrap">
 <div id="dcHead">

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
</div></div> 
 <div id="dcMain">

   <!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心<b>></b><strong>添加商品</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="<?php echo U('show');?>" class="actionBtn">商品列表</a>添加商品</h3>
    <form action="<?php echo U('upload');?>" method="post" enctype="multipart/form-data">
     <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
    <input type="hidden" name="id" value="<?php echo ($info["shopid"]); ?>">
      <tr>
       <td width="90" align="right">商品名称</td>
       <td>
        <input type="text" name="shopname" size="80" class="inpMain" value="<?php echo ($info["shopname"]); ?>" />
       </td>
      </tr>
            <tr>
       <td width="90" align="right">商品型号</td>
       <td>
        <input type="text" name="model" value="<?php echo ($info["model"]); ?>" size="80" class="inpMain" />
       </td>
      </tr>
            <tr>
       <td width="90" align="right">库存单元</td>
       <td>
        <input type="text" name="sku" value="<?php echo ($info["sku"]); ?>" size="80" class="inpMain" />
       </td>
      </tr>
            <tr>
       <td width="90" align="right">产品所在地</td>
       <td>
        <input type="text" name="location" value="<?php echo ($info["location"]); ?>" size="80" class="inpMain" />
       </td>
      </tr>
      
        <tr>
       <td width="90" align="right">品牌编号</td>
       <td>
        <input type="text" name="brand_id" value="<?php echo ($info["brand_id"]); ?>" size="80" class="inpMain" />
       </td>
      </tr>

        <tr>
       <td width="90" align="right">商品价格</td>
       <td>
        <input type="text" name="price" value="<?php echo ($info["price"]); ?>" size="80" class="inpMain" />
       </td>
      </tr>
        <tr>
       <td width="90" align="right">积分</td>
       <td>
        <input type="text" name="points" value="<?php echo ($info["points"]); ?>" size="80" class="inpMain" />
       </td>
      </tr>
        <tr>
       <td width="90" align="right">供货日期</td>
       <td>
        <input type="text" name="date_available" value="<?php echo ($info["date_available"]); ?>" size="80" class="inpMain" />
       </td>
      </tr>
        <tr>
       <td width="90" align="right">商品排序</td>
       <td>
        <input type="text" name="sort_order" value="" size="80" class="inpMain" />
       </td>
      </tr>
      

          <tr>
       <td width="90" align="right">点击量</td>
       <td>
        <input type="text" name="viewed" value="<?php echo ($info["viewed"]); ?>" size="80" class="inpMain" />
       </td>
      </tr>
          <tr>
       <td width="90" align="right">商品描述</td>
       <td>
        <input type="text" name="content" value="<?php echo ($info["content"]); ?>" size="80" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td align="right">商品分类</td>
       <td>
        <select name="fid">
              <option value="0">顶级权限</option>

          <?php if(is_array($info)): foreach($info as $k=>$vo): ?><option value="<?php echo ($vo["id"]); ?>"> <?php echo str_repeat('|-',$vo['fid']); echo ($vo["type_name"]); ?></option><?php endforeach; endif; ?>
               
                          </select>
       </td>
      </tr>
   
      <tr>
       <td></td>
       <td>
        <input type="hidden" name="token" value="21307217" />
        <input type="hidden" name="id" value="">
        <input name="submit" class="btn" type="submit" value="提交" />
       </td>
      </tr>
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