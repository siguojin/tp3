<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>商品列表页</title>
	<link rel="stylesheet" href="/Public/css/base.css" type="text/css" />
	<link rel="stylesheet" href="/Public/css/shop_common.css" type="text/css" />
	<link rel="stylesheet" href="/Public/css/shop_header.css" type="text/css" />
    <link rel="stylesheet" href="/Public/css/shop_list.css" type="text/css" />
    <script type="text/javascript" src="/Public/js/jquery.js" ></script>
    <script type="text/javascript" src="/Public/js/topNav.js" ></script>
    <script type="text/javascript" src="/Public/js/shop_list.js" ></script>
</head>
<style>
	.dl{
		float: left;
	}
</style>
<body>
	<!-- Header  -wll-2013/03/24 -->
	<div class="shop_hd">
		<!-- Header TopNav -->
		<div class="shop_hd_topNav">
			<div class="shop_hd_topNav_all">
				<!-- Header TopNav Left -->
				<div class="shop_hd_topNav_all_left">
					<p>您好，欢迎来到<b><a href="/">ShoopNC商城</a></b>[<a href="">登录</a>][<a href="">注册</a>]</p>
				</div>
				<!-- Header TopNav Left End -->

				<!-- Header TopNav Right -->
				<div class="shop_hd_topNav_all_right">
					<ul class="topNav_quick_menu">

						<li>
							<div class="topNav_menu">
								<a href="#" class="topNavHover">我的商城<i></i></a>
								<div class="topNav_menu_bd" style="display:none;" >
						            <ul>
						              <li><a title="已买到的商品" target="_top" href="#">已买到的商品</a></li>
						              <li><a title="个人主页" target="_top" href="#">个人主页</a></li>
						              <li><a title="我的好友" target="_top" href="#">我的好友</a></li>
						            </ul>
						        </div>
							</div>
						</li>
                                                <li>
							<div class="topNav_menu">
								<a href="#" class="topNavHover">卖家中心<i></i></a>
								<div class="topNav_menu_bd" style="display:none;">
						            <ul>
						              <li><a title="已售出的商品" target="_top" href="#">已售出的商品</a></li>
						              <li><a title="销售中的商品" target="_top" href="#">销售中的商品</a></li>
						            </ul>
						        </div>
							</div>
						</li>

						<li>
							<div class="topNav_menu">
								<a href="#" class="topNavHover">购物车<b>0</b>种商品<i></i></a>
								<div class="topNav_menu_bd" style="display:none;">
									<!--
						            <ul>
						              <li><a title="已售出的商品" target="_top" href="#">已售出的商品</a></li>
						              <li><a title="销售中的商品" target="_top" href="#">销售中的商品</a></li>
						            </ul>
						        	-->
						            <p>还没有商品，赶快去挑选！</p>
						        </div>
							</div>
						</li>

						<li>
							<div class="topNav_menu">
								<a href="#" class="topNavHover">我的收藏<i></i></a>
								<div class="topNav_menu_bd" style="display:none;">
						            <ul>
						              <li><a title="收藏的商品" target="_top" href="#">收藏的商品</a></li>
						              <li><a title="收藏的店铺" target="_top" href="#">收藏的店铺</a></li>
						            </ul>
						        </div>
							</div>
						</li>

						<li>
							<div class="topNav_menu">
								<a href="#">站内消息</a>
							</div>
						</li>

					</ul>
				</div>
				<!-- Header TopNav Right End -->
			</div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
		<!-- Header TopNav End -->

		<!-- TopHeader Center -->
		<div class="shop_hd_header">
			<div class="shop_hd_header_logo"><h1 class="logo"><a href="/"><img src="images/logo.png" alt="ShopCZ" /></a><span>ShopCZ</span></h1></div>
			<div class="shop_hd_header_search">
                            <ul class="shop_hd_header_search_tab">
			        <li id="w" class="current">商品</li>
			        <li id="shop_search">店铺</li>
			    </ul>
                            <div class="clear"></div>
			    <div class="search_form">
			    	<form method="post" action="index.php">
			    		<div class="search_formstyle">
			    			<input type="text" class="search_form_text" id="cxpid" name="name" value="<?php echo I('name');?>" placeholder="搜索其实很简单" />
			    			<input type="button" id="search" class="search_form_sub" title="搜索" />
			    		</div>
			    	</form>
			    </div>
                            <div class="clear"></div>
			    <div class="search_tag">
			    	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($i % 2 );++$i;?><a href=""><?php echo ($li["r_name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
			    </div>

			</div>
		</div>
		<div class="clear"></div>
		<!-- TopHeader Center End -->

		<!-- Header Menu -->

		<!-- Header Menu End -->

	</div>
	<div class="clear"></div>
	<!-- 面包屑 注意首页没有 -->
	<div class="clear"></div>
	<!-- 面包屑 End -->

	<!-- Header End -->


	<!-- List Body 2013/03/27 -->
	<div class="shop_bd clearfix">
		<div class="shop_bd_list_left clearfix">
		</div>

		<div class="shop_bd_list_right clearfix">


			<!-- 显示菜单 -->
			<div class="sort-bar">
				<div class="bar-l"> 
		            <!-- 查看方式S -->
		            <div class="switch"><span class="selected"><a title="以方格显示" ecvalue="squares" nc_type="display_mode" class="pm" href="javascript:void(0)">大图</a></span><span style="border-left:none;"><a title="以列表显示" ecvalue="list" nc_type="display_mode" class="lm" href="javascript:void(0)">列表</a></span></div>
		            <!-- 查看方式E -->
		            <!-- 排序方式S -->
		            <ul class="array">
		              <li class="selected"><a title="默认排序" onclick="javascript:dropParam(['key','order'],'','array');" class="nobg" href="javascript:void(0)">默认</a></li>
		              <li><a title="点击按销量从高到低排序" onclick="javascript:replaceParam(['key','order'],['sales','desc'],'array');" href="javascript:void(0)">销量</a></li>
		              <li><a title="点击按人气从高到低排序" onclick="javascript:replaceParam(['key','order'],['click','desc'],'array');" href="javascript:void(0)">人气</a></li>
		              <li><a title="点击按信用从高到低排序" onclick="javascript:replaceParam(['key','order'],['credit','desc'],'array');" href="javascript:void(0)">信用</a></li>
		              <li><a title="点击按价格从高到低排序" onclick="javascript:replaceParam(['key','order'],['price','desc'],'array');" href="javascript:void(0)">价格</a></li>
		            </ul>
		            <!-- 排序方式E -->
		            <!-- 价格段S -->
		            <div class="prices"> <em>¥</em>
		              <input type="text" value="" class="w30">
		              <em>-</em>
		              <input type="text" value="" class="w30">
		              <input type="submit" value="确认" id="search_by_price">
		            </div>
		            <!-- 价格段E -->
		          </div>
			</div>
			<div class="clear"></div>
			<!-- 显示菜单 End -->
		<input type="hidden" value="1" id="page"/>
                            <!--隐藏的input   传入总页数-->
                     <input type="hidden" id="page_total" value="<?php echo $bcount; ?>"/>
			<!-- 商品列表 -->
			<div class="shop_bd_list_content clearfix" id="the-list">
			 <!--隐藏的input   初始页 为第一页-->
                            
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><ul class="dl">
					<li >
						<dl>
							<dt><a href="index.php?m=home&c=shop&a=goods&id=<?php echo ($vo['id']); ?>"><img src="Uploads/<?php echo ($vo["image"]); ?>" /></a></dt>
							<dd class="title"><a href=""><?php echo ($vo["name"]); ?></a></dd>
							<dd class="content">
								<span class="goods_jiage">￥<strong><?php echo ($vo["money"]); ?></strong></span>
							</dd>
						</dl>
					</li>
					
				</ul><?php endforeach; endif; else: echo "" ;endif; ?>
			
			</div>
			<div id="p1">
                    <span onclick="fun(1)" style="cursor: pointer;">首页</span>
                    <span onclick="fun(2)" style="cursor: pointer;">上一页</span>
                    <span onclick="fun(3)" style="cursor: pointer;">下一页</span>
                    <span onclick="fun(4)" style="cursor: pointer;">尾页</span>
			</div>
			<!-- 商品列表 End -->
				

		</div>
	</div>
	<!-- List Body End -->

	<!-- Footer - wll - 2013/3/24 -->
	<div class="clear"></div>
	<div class="shop_footer">
            <div class="shop_footer_link">
                <p>
                    <a href="">首页</a>|
                    <a href="">招聘英才</a>|
                    <a href="">广告合作</a>|
                    <a href="">关于ShopCZ</a>|
                    <a href="">关于我们</a>
                </p>
            </div>
            <div class="shop_footer_copy">
                <p>Copyright 2004-2013 itcast Inc.,All rights reserved.</p>
            </div>
        </div>
	<!-- Footer End -->
	<script src="./public/js/jquery-3.1.1.min.js"></script>

	<script type="text/javascript">

    $(document).on('click', '#search', function () {
       //alert(123);die;
        var cxpid = $('#cxpid').val();
        //alert(cxpid);die;
		var num=1;
        $.ajax({
            url: "index.php?m=home&c=shop&a=ajaxPage",
            data: {cxpid: cxpid,num:num},
            type: 'post',
            dataType: 'html',
            success: function (str) {
                $('#the-list').html(str);
            }
        })
    })
    function fun(flag) {
        var page = $('#page').val();
        var page_total = $('#page_total').val();
        //alert(page);
        var content = $('#the-list');
        var now = 1;
        if (flag == 2) {
            now = (page - 1) > 0 ? (page - 1) : 1;
        } else if (flag == 3) {
            now = (page * 1 + 1) < page_total ? (page * 1 + 1) : page_total;
        } else if (flag == 4) {
            now = page_total;
        }
        //alert(now);
        $.ajax({
            url: "index.php?m=home&c=shop&a=ajaxPage",
            data: {now: now},
            type: "post",
            dataType: "html",
            success: function (str) {
                $('#the-list').html(str);
                $('#page').val(now);
            }
        })
    }
	</script>
</body>
</html>