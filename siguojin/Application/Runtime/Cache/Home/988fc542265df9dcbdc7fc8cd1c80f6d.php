<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>DouPHP 管理中心 - 商品列表 </title>
<meta name="Copyright" content="Douco Design." />
<link href="/Public/admin/css/public.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/Public/admin/js/jquery.min.js"></script>
<script type="text/javascript" src="/Public/admin/js/global.js"></script>
<script type="text/javascript" src="/Public/admin/js/jquery.autotextarea.js"></script>
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



<div id="urHere">DouPHP 管理中心<b>></b><strong>商品列表</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <h3><a href="<?php echo U('insert');?>" class="actionBtn add">添加商品</a>商品列表</h3>
    <div class="filter">
    <form action="product.php" method="post">
     <select name="fid">
              <option value="0">顶级权限</option>

          <?php if(is_array($info1)): foreach($info1 as $k=>$vo): ?><option value="<?php echo ($vo["id"]); ?>"> <?php echo str_repeat('|-',$vo['fid']); echo ($vo["type_name"]); ?></option><?php endforeach; endif; ?>
               
                          </select>
     <input name="keyword" type="text" class="inpMain" value="" size="20" />
     <input name="submit" class="btnGray" type="submit" value="筛选" />
    </form>
    <span>
    <a class="btnGray" href="product.php?rec=re_thumb">更新商品缩略图</a>
        <a class="btnGray" href="product.php?rec=sort">开始筛选首页商品</a>
        </span>
    </div>
        <div id="list">
    <form name="action" method="post" action="product.php?rec=action">
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
   
        <th width="22" align="center"><input name='chkall' type='checkbox' id='chkall' onclick='selectcheckbox(this.form)' value='check'></th>
        <th>商品名称</th>
        <th>产品所在地</th>
        <th>商品图片</th>
        <th>是否需要运送</th>
        <th>商品价格</th>
        <th>上架/下架</th>
        <th>分类id</th>
        <th>操作</th>

      <?php if(is_array($info)): foreach($info as $k=>$v): ?><tr>
          <td align="center"><input type="checkbox" name="checkbox[]" value="15" /></td>
          <td align="center"><?php echo ($v["shopname"]); ?></td>
          <td align="center"><?php echo ($v["location"]); ?></td>
          <td align="center">
                    <?php if(is_array($v["files"])): foreach($v["files"] as $k=>$vo): ?><img src="/Uploads/<?php echo ($vo); ?>" width="50px" height="50px"><?php endforeach; endif; ?>

          </td>
          <td align="center">
            <?php if(($v["shipping"] == 1)): ?>送达<?php else: ?>不送<?php endif; ?>
          </td>
          <td align="center"><?php echo ($v["price"]); ?></td>
          <td align="center">
            <a href="<?php echo U('shangjia',array('id'=>$v['shopid'],'status'=>$v['status']) );?>"><?php echo ($v["status"]); ?></a>
          </td>
          <td align="center"><?php echo ($vo["type_name"]); ?></td>
          <td align="center">
             <a href="<?php echo U('update',array('id'=>$v['shopid']));?>">编辑</a> |
             <a href="<?php echo U('delete',array('id'=>$v['shopid']));?>">删除</a>
          </td>
        </tr><?php endforeach; endif; ?>

          </table>
    <div class="action">
     <select name="action" onchange="douAction()">
      <option value="0">请选择...</option>
      <option value="del_all">删除</option>
      <option value="category_move">移动分类至</option>
     </select>
     <select name="new_cat_id" style="display:none">
      <option value="0">未分类</option>
                  <option value="1"> 电子数码</option>
                        <option value="4">- 智能手机</option>
                        <option value="5">- 平板电脑</option>
                        <option value="2"> 家居百货</option>
                        <option value="3"> 母婴用品</option>
                 </select>
     <input name="submit" class="btn" type="submit" value="执行" />
    </div>
    </form>
    </div>
    <div class="clear"></div>
    <div class="pager">总计 15 个记录，共 1 页，当前第 1 页 | <a href="product.php?page=1">第一页</a> 上一页 下一页 <a href="product.php?page=1">最末页</a></div>               </div>
 </div>
 <div class="clear"></div>
<div id="dcFooter">
 <div id="footer">
  <div class="line"></div>
  <ul>
   版权所有 © 2013-2015 漳州豆壳网络科技有限公司，并保留所有权利。
  </ul>

</div><!-- dcFooter 结束 -->
<div class="clear"></div> </div>
<script type="text/javascript">

onload = function()
{
 document.forms['action'].reset();
}

function douAction()
{
 var frm = document.forms['action'];
 frm.elements['new_cat_id'].style.display = frm.elements['action'].value == 'category_move' ? '' : 'none';
}

</script>
</body>
</html>