<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>ShopCZ-首页</title>
	<link rel="stylesheet" href="/Public/sc/css/base.css" type="text/css" />
	<link rel="stylesheet" href="/Public/sc/css/shop_common.css" type="text/css" />
	<link rel="stylesheet" href="/Public/sc/css/shop_header.css" type="text/css" />
        <link rel="stylesheet" href="/Public/sc/css/shop_home.css" type="text/css" />
        <script type="text/javascript" src="/Public/sc/js/jquery.js" ></script>
        <script type="text/javascript" src="/Public/sc/js/topNav.js" ></script>
        <script type="text/javascript" src="/Public/sc/js/focus.js" ></script>
        <script type="text/javascript" src="/Public/sc/js/shop_home_tab.js" ></script>
</head>
<body>
	<!-- Header  -wll-2013/03/24 -->
	<div class="shop_hd">
		<!-- Header TopNav -->
		<div class="shop_hd_topNav">
			<div class="shop_hd_topNav_all">
				<!-- Header TopNav Left -->
				<div class="shop_hd_topNav_all_left">
					<p>您好，欢迎来到<b><a href="/">ShopCZ商城</a></b>[<a href="">登录</a>][<a href="">注册</a>]</p>
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
			<div class="shop_hd_header_logo"><h1 class="logo"><a href="/"><img src="/Public/sc/images/logo.png" alt="ShopCZ" /></a><span>ShopCZ</span></h1></div>
			<div class="shop_hd_header_search">
                            <ul class="shop_hd_header_search_tab">
			        <li id="search" class="current">商品</li>
			        <li id="shop_search">店铺</li>
			    </ul>
                            <div class="clear"></div>
			    <div class="search_form">
			    	<form method="post" action="index.php">
			    		<div class="search_formstyle">
			    			<input type="text" class="search_form_text" name="search_content" value="搜索其实很简单！" />
			    			<input type="submit" class="search_form_sub" name="secrch_submit" value="" title="搜索" />
			    		</div>
			    	</form>
			    </div>
                            <div class="clear"></div>
			    <div class="search_tag">
			    	<a href="">李宁</a>
			    	<a href="">耐克</a>
			    	<a href="">Kappa</a>
			    	<a href="">双肩包</a>
			    	<a href="">手提包</a>
			    </div>

			</div>
		</div>
		<div class="clear"></div>
		<!-- TopHeader Center End -->

		<!-- Header Menu -->
		<div class="shop_hd_menu">
			<!-- 所有商品菜单 -->
                        
			<div class="shop_hd_menu_all_category shop_hd_menu_hover"><!-- 首页去掉 id="shop_hd_menu_all_category" 加上clsss shop_hd_menu_hover -->
				<div class="shop_hd_menu_all_category_title"><h2 title="所有商品分类"><a href="javascript:void(0);">所有商品分类</a></h2><i></i></div>
				<div id="shop_hd_menu_all_category_hd" class="shop_hd_menu_all_category_hd">
					<ul class="shop_hd_menu_all_category_hd_menu clearfix">
						<!-- 单个菜单项 -->
						<li id="cat_1" class="">
							<h3><a href="" title="男女服装">男女服装</a></h3>
							<div id="cat_1_menu" class="cat_menu clearfix" style="">
								<dl class="clearfix">
									<dt><a href="女装" href="">女装</a></dt>
									<dd>
										<a href="">风衣</a>
										<a href="">长袖连衣裙</a>
										<a href="">毛呢连衣裙</a>
										<a href="">半身裙</a>
										<a href="">小脚裤</a>
										<a href="">加绒打底裤</a>
										<a href="">牛仔裤</a>
										<a href="">打底衫</a>
										<a href="">情侣装</a>
										<a href="">棉衣</a>
										<a href="">毛呢大衣</a>
                                        <a href="">毛呢短裤</a>
									</dd>
								</dl>
                                                            
                                <dl class="clearfix">
									<dt><a href="男装" href="">男装</a></dt>
									<dd>
										<a href="">风衣</a>
										<a href="">长袖连衣裙</a>
										<a href="">毛呢连衣裙</a>
										<a href="">半身裙</a>
										<a href="">小脚裤</a>
										<a href="">加绒打底裤</a>
										<a href="">牛仔裤</a>
										<a href="">打底衫</a>
										<a href="">情侣装</a>
										<a href="">棉衣</a>
										<a href="">毛呢大衣</a>
                                        <a href="">毛呢短裤</a>
									</dd>
								</dl>
							</div>
						</li>
						<!-- 单个菜单项 End -->
                                                <li id="cat_2" class="">
                                                    <h3><a href="" title="鞋包配饰">鞋包配饰</a></h3>
                                                    <div id="cat_1_menu" class="cat_menu clearfix" style="">
                                                        <dl class="clearfix">
									<dt><a href="鞋子" href="">鞋子</a></dt>
									<dd>
										<a href="">风衣</a>
										<a href="">长袖连衣裙</a>
										<a href="">毛呢连衣裙</a>
										<a href="">半身裙</a>
										<a href="">小脚裤</a>
										<a href="">加绒打底裤</a>
										<a href="">牛仔裤</a>
										<a href="">打底衫</a>
										<a href="">情侣装</a>
										<a href="">棉衣</a>
										<a href="">毛呢大衣</a>
                                                                                <a href="">毛呢短裤</a>
									</dd>
								</dl>
                                                            
                                                                <dl class="clearfix">
									<dt><a href="包包" href="">包包</a></dt>
									<dd>
										<a href="">风衣</a>
										<a href="">长袖连衣裙</a>
										<a href="">毛呢连衣裙</a>
										<a href="">半身裙</a>
										<a href="">小脚裤</a>
										<a href="">加绒打底裤</a>
										<a href="">牛仔裤</a>
										<a href="">打底衫</a>
										<a href="">情侣装</a>
										<a href="">棉衣</a>
										<a href="">毛呢大衣</a>
                                                                                <a href="">毛呢短裤</a>
									</dd>
								</dl>
                                                    </div>
                                                </li>
                                                
                                                <li id="cat_3" class="">
                                                    <h3><a href="" title="美容美妆">美容美妆</a></h3>
                                                    <div id="cat_1_menu" class="cat_menu clearfix" style="">
                                                        <dl class="clearfix">
									<dt><a href="美容" href="">美容</a></dt>
									<dd>
										<a href="">风衣</a>
										<a href="">长袖连衣裙</a>
										<a href="">毛呢连衣裙</a>
										<a href="">半身裙</a>
										<a href="">小脚裤</a>
										<a href="">加绒打底裤</a>
										<a href="">牛仔裤</a>
										<a href="">打底衫</a>
										<a href="">情侣装</a>
										<a href="">棉衣</a>
										<a href="">毛呢大衣</a>
                                                                                <a href="">毛呢短裤</a>
									</dd>
								</dl>
                                                            
                                                                <dl class="clearfix">
									<dt><a href="美妆" href="">美妆</a></dt>
									<dd>
										<a href="">风衣</a>
										<a href="">长袖连衣裙</a>
										<a href="">毛呢连衣裙</a>
										<a href="">半身裙</a>
										<a href="">小脚裤</a>
										<a href="">加绒打底裤</a>
										<a href="">牛仔裤</a>
										<a href="">打底衫</a>
										<a href="">情侣装</a>
										<a href="">棉衣</a>
										<a href="">毛呢大衣</a>
                                                                                <a href="">毛呢短裤</a>
									</dd>
								</dl>
                                                    </div>
                                                </li>
                                                
                                                <li id="cat_4" class="">
                                                    <h3><a href="" title="美容美妆">美容美妆</a></h3>
                                                    <div id="cat_1_menu" class="cat_menu clearfix" style="">
                                                        <dl class="clearfix">
									<dt><a href="美容" href="">美容</a></dt>
									<dd>
										<a href="">风衣</a>
										<a href="">长袖连衣裙</a>
										<a href="">毛呢连衣裙</a>
										<a href="">半身裙</a>
										<a href="">小脚裤</a>
										<a href="">加绒打底裤</a>
										<a href="">牛仔裤</a>
										<a href="">打底衫</a>
										<a href="">情侣装</a>
										<a href="">棉衣</a>
										<a href="">毛呢大衣</a>
                                                                                <a href="">毛呢短裤</a>
									</dd>
								</dl>
                                                            
                                                                <dl class="clearfix">
									<dt><a href="美妆" href="">美妆</a></dt>
									<dd>
										<a href="">风衣</a>
										<a href="">长袖连衣裙</a>
										<a href="">毛呢连衣裙</a>
										<a href="">半身裙</a>
										<a href="">小脚裤</a>
										<a href="">加绒打底裤</a>
										<a href="">牛仔裤</a>
										<a href="">打底衫</a>
										<a href="">情侣装</a>
										<a href="">棉衣</a>
										<a href="">毛呢大衣</a>
                                                                                <a href="">毛呢短裤</a>
									</dd>
								</dl>
                                                    </div>
                                                </li>
                                                
                                                <li id="cat_5" class="">
                                                    <h3><a href="" title="美容美妆">美容美妆</a></h3>
                                                    <div id="cat_1_menu" class="cat_menu clearfix" style="">
                                                        <dl class="clearfix">
									<dt><a href="美容" href="">美容</a></dt>
									<dd>
										<a href="">风衣</a>
										<a href="">长袖连衣裙</a>
										<a href="">毛呢连衣裙</a>
										<a href="">半身裙</a>
										<a href="">小脚裤</a>
										<a href="">加绒打底裤</a>
										<a href="">牛仔裤</a>
										<a href="">打底衫</a>
										<a href="">情侣装</a>
										<a href="">棉衣</a>
										<a href="">毛呢大衣</a>
                                                                                <a href="">毛呢短裤</a>
									</dd>
								</dl>
                                                            
                                                                <dl class="clearfix">
									<dt><a href="美妆" href="">美妆</a></dt>
									<dd>
										<a href="">风衣</a>
										<a href="">长袖连衣裙</a>
										<a href="">毛呢连衣裙</a>
										<a href="">半身裙</a>
										<a href="">小脚裤</a>
										<a href="">加绒打底裤</a>
										<a href="">牛仔裤</a>
										<a href="">打底衫</a>
										<a href="">情侣装</a>
										<a href="">棉衣</a>
										<a href="">毛呢大衣</a>
                                                                                <a href="">毛呢短裤</a>
									</dd>
								</dl>
                                                    </div>
                                                </li>
                                                
                                                <li id="cat_6" class="">
                                                    <h3><a href="" title="美容美妆">美容美妆</a></h3>
                                                    <div id="cat_1_menu" class="cat_menu clearfix" style="">
                                                        <dl class="clearfix">
									<dt><a href="美容" href="">美容</a></dt>
									<dd>
										<a href="">风衣</a>
										<a href="">长袖连衣裙</a>
										<a href="">毛呢连衣裙</a>
										<a href="">半身裙</a>
										<a href="">小脚裤</a>
										<a href="">加绒打底裤</a>
										<a href="">牛仔裤</a>
										<a href="">打底衫</a>
										<a href="">情侣装</a>
										<a href="">棉衣</a>
										<a href="">毛呢大衣</a>
                                                                                <a href="">毛呢短裤</a>
									</dd>
								</dl>
                                                            
                                                                <dl class="clearfix">
									<dt><a href="美妆" href="">美妆</a></dt>
									<dd>
										<a href="">风衣</a>
										<a href="">长袖连衣裙</a>
										<a href="">毛呢连衣裙</a>
										<a href="">半身裙</a>
										<a href="">小脚裤</a>
										<a href="">加绒打底裤</a>
										<a href="">牛仔裤</a>
										<a href="">打底衫</a>
										<a href="">情侣装</a>
										<a href="">棉衣</a>
										<a href="">毛呢大衣</a>
                                                                                <a href="">毛呢短裤</a>
									</dd>
								</dl>
                                                    </div>
                                                </li>
                                                <li id="cat_7" class="">
                                                    <h3><a href="" title="美容美妆">美容美妆</a></h3>
                                                    <div id="cat_1_menu" class="cat_menu clearfix" style="">
                                                        <dl class="clearfix">
									<dt><a href="美容" href="">美容</a></dt>
									<dd>
										<a href="">风衣</a>
										<a href="">长袖连衣裙</a>
										<a href="">毛呢连衣裙</a>
										<a href="">半身裙</a>
										<a href="">小脚裤</a>
										<a href="">加绒打底裤</a>
										<a href="">牛仔裤</a>
										<a href="">打底衫</a>
										<a href="">情侣装</a>
										<a href="">棉衣</a>
										<a href="">毛呢大衣</a>
                                                                                <a href="">毛呢短裤</a>
									</dd>
								</dl>
                                                            
                                                                <dl class="clearfix">
									<dt><a href="美妆" href="">美妆</a></dt>
									<dd>
										<a href="">风衣</a>
										<a href="">长袖连衣裙</a>
										<a href="">毛呢连衣裙</a>
										<a href="">半身裙</a>
										<a href="">小脚裤</a>
										<a href="">加绒打底裤</a>
										<a href="">牛仔裤</a>
										<a href="">打底衫</a>
										<a href="">情侣装</a>
										<a href="">棉衣</a>
										<a href="">毛呢大衣</a>
                                                                                <a href="">毛呢短裤</a>
									</dd>
								</dl>
                                                    </div>
                                                </li>
                                                <li id="cat_8" class="">
                                                    <h3><a href="" title="美容美妆">美容美妆</a></h3>
                                                    <div id="cat_1_menu" class="cat_menu clearfix" style="">
                                                        <dl class="clearfix">
									<dt><a href="美容" href="">美容</a></dt>
									<dd>
										<a href="">风衣</a>
										<a href="">长袖连衣裙</a>
										<a href="">毛呢连衣裙</a>
										<a href="">半身裙</a>
										<a href="">小脚裤</a>
										<a href="">加绒打底裤</a>
										<a href="">牛仔裤</a>
										<a href="">打底衫</a>
										<a href="">情侣装</a>
										<a href="">棉衣</a>
										<a href="">毛呢大衣</a>
                                                                                <a href="">毛呢短裤</a>
									</dd>
								</dl>
                                                            
                                                                <dl class="clearfix">
									<dt><a href="美妆" href="">美妆</a></dt>
									<dd>
										<a href="">风衣</a>
										<a href="">长袖连衣裙</a>
										<a href="">毛呢连衣裙</a>
										<a href="">半身裙</a>
										<a href="">小脚裤</a>
										<a href="">加绒打底裤</a>
										<a href="">牛仔裤</a>
										<a href="">打底衫</a>
										<a href="">情侣装</a>
										<a href="">棉衣</a>
										<a href="">毛呢大衣</a>
                                                                                <a href="">毛呢短裤</a>
									</dd>
								</dl>
                                                    </div>
                                                </li>
                                                <li class="more"><a href="">查看更多分类</a></li>
					</ul>
				</div>
			</div>
			<!-- 所有商品菜单 END -->

			<!-- 普通导航菜单 -->
			<ul class="shop_hd_menu_nav">
				<li class="current_link"><a href=""><span>首页</span></a></li>
				<li class="link"><a href=""><span>团购</span></a></li>
				<li class="link"><a href=""><span>品牌</span></a></li>
				<li class="link"><a href=""><span>优惠卷</span></a></li>
				<li class="link"><a href=""><span>积分中心</span></a></li>
				<li class="link"><a href=""><span>运动专场</span></a></li>
				<li class="link"><a href=""><span>微商城</span></a></li>
			</ul>
			<!-- 普通导航菜单 End -->
		</div>
		<!-- Header Menu End -->



	</div>
	<div class="clear"></div>
	<!-- Header End -->
	

	<!-- Body -wll-2013/03/24 -->
	<div class="shop_bd clearfix">
            <!-- 第一块区域  -->
            <div class="shop_bd_top clearfix">
                <div class="shop_bd_top_left"></div>
                <div class="shop_bd_top_center">
                    <!-- 图片切换  begin  -->
                    <div class="xifan_sub_box">
                      <div id="p-select" class="sub_nav"><div class="sub_no" id="xifan_bd1lfsj"> <ul></ul></div></div>
                      <div id="xifan_bd1lfimg">
                        <div>
                        <?php if(is_array($list)): foreach($list as $key=>$vo): ?><dl class=""></dl>
                          <dl class="">
  <dt><a href="http://www.zztuku.com" title="" target="_blank"><img src="/Uploads/<?php echo ($vo["files"]); ?>" alt="2011城市主题公园亲子游"></a></dt>
                            <dd><h2><a href="http://www.zztuku.com" target="_blank">2011城市主题公园亲子游</a></h2></dd>
                          </dl><?php endforeach; endif; ?>
                        </div>
                      </div>
                    </div>
                    <script type="text/javascript">movec();</script> 
                    <!-- 图片切换  end --> 
                    <div class="clear"></div>
                    <div class="shop_bd_top_center_hot"><img src="/Public/sc/images/index.guanggao.png" /></div>
                </div>
                
                <!-- 右侧 -->
                <div class="shop_bd_top_right clearfix">
                    <div class="shop_bd_top_right_quickLink">
                        <a href="" class="login" title="会员登录"><i></i>会员登录</a>
                        <a href="" class="register" title="免费注册"><i></i>免费注册</a>
                        <a href="" class="join" title="商家开店" ><i></i>帮助中心</a>
                    </div>
                    
                    <div class="shop_bd_top_right-style1 nc-home-news">
                        <ul class="tabs-nav">
                            <li><a href="javascript:void(0);" class="hover">商城广告</a></li>
                            <li><a href="javascript:void(0);">关于我们</a></li>
                        </ul>
                        <div class="clear"></div>
                        <div class="tabs-panel">
                            <ul class="list-style01">
                                <li><a title="如何申请开店" href="article-15.html">如何申请开店</a><span>(2011-01-11)</span></li>
                                <li><a title="商城商品推荐" href="article-14.html">商城商品推荐</a><span>(2011-01-11)</span></li>
                                <li><a title="如何发货" href="article-13.html">如何发货</a><span>(2011-01-11)</span></li>
                                <li><a title="查看售出商品" href="article-12.html">查看售出商品</a><span>(2011-01-11)</span></li>
                                <li><a title="如何管理店铺" href="article-11.html">如何管理店铺</a><span>(2011-01-11)</span></li>
                                <li><a title="如何申请开店" href="article-15.html">如何申请开店</a><span>(2011-01-11)</span></li>
                                <li><a title="商城商品推荐" href="article-14.html">商城商品推荐</a><span>(2011-01-11)</span></li>
                                <li><a title="如何发货" href="article-13.html">如何发货</a><span>(2011-01-11)</span></li>
                                <li><a title="查看售出商品" href="article-12.html">查看售出商品</a><span>(2011-01-11)</span></li>
                                <li><a title="如何管理店铺" href="article-11.html">如何管理店铺</a><span>(2011-01-11)</span></li>
                                
                                
                            </ul>
                        </div>
                    </div>
                    
                    
                </div>
                <!-- 右侧 End -->
            </div>
            <div class="clear"></div>
            <!-- 第一块区域 End -->
            
            <!-- 第二块区域 -->
            <div class="shop_bd_2 clearfix">
                <!-- 特别推荐 -->
                <div class="shop_bd_tuijian">
                    <ul class="tuijian_tabs">
                        <li class="hover"  onmouseover="easytabs('1', '1');" onfocus="easytabs('1', '1');" onclick="return false;" id="tuijian_content_btn_1"><a href="javascript:void(0);">特别推荐</a></li>
                        <li onmouseover="easytabs('1', '2');" onfocus="easytabs('1', '2');" onclick="return false;" id="tuijian_content_btn_2" ><a href="javascript:void(0);">热门商品</a></li>
                        <li onmouseover="easytabs('1', '3');" onfocus="easytabs('1', '3');" onclick="return false;" id="tuijian_content_btn_3"><a href="javascript:void(0);">新品上架</a></li>
                    </ul>
                    <div class="tuijian_content">
                        <div id="tuijian_content_1" class="tuijian_shangpin" style="display: block;">
                            <ul>
                                <li>
                                    <dl>
                                        <dt><a href=""><img src="/Public/sc/images/365_7d5e08127b8d6799209674ecffbfc624.jpg_small.jpg" /></a></dt>
                                        <dd><a href="">11111111棉布艺双人沙发垫沙发巾飘窗垫素雅黄花</a></dd>
                                        <dd> 商城价：<em>256.00</em>元</dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt><a href=""><img src="/Public/sc/images/365_7d5e08127b8d6799209674ecffbfc624.jpg_small.jpg" /></a></dt>
                                        <dd><a href="">外贸田园绗缝全棉布艺双人沙发垫沙发巾飘窗垫素雅黄花</a></dd>
                                        <dd> 商城价：<em>256.00</em>元</dd>
                                    </dl>
                                </li>
                                
                                <li>
                                    <dl>
                                        <dt><a href=""><img src="/Public/sc/images/365_7d5e08127b8d6799209674ecffbfc624.jpg_small.jpg" /></a></dt>
                                        <dd><a href="">外贸田园绗缝全棉布艺双人沙发垫沙发巾飘窗垫素雅黄花</a></dd>
                                        <dd> 商城价：<em>256.00</em>元</dd>
                                    </dl>
                                </li>
                                
                                <li>
                                    <dl>
                                        <dt><a href=""><img src="/Public/sc/images/365_7d5e08127b8d6799209674ecffbfc624.jpg_small.jpg" /></a></dt>
                                        <dd><a href="">外贸田园绗缝全棉布艺双人沙发垫沙发巾飘窗垫素雅黄花</a></dd>
                                        <dd> 商城价：<em>256.00</em>元</dd>
                                    </dl>
                                </li>
                                
                            </ul>
                        </div>
                        
                        <div id="tuijian_content_2" class="tuijian_shangpin">
                            <ul>
                                <li>
                                    <dl>
                                        <dt><a href=""><img src="/Public/sc/images/365_7d5e08127b8d6799209674ecffbfc624.jpg_small.jpg" /></a></dt>
                                        <dd><a href="">2222222棉布艺双人沙发垫沙发巾飘窗垫素雅黄花</a></dd>
                                        <dd> 商城价：<em>256.00</em>元</dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt><a href=""><img src="/Public/sc/images/365_7d5e08127b8d6799209674ecffbfc624.jpg_small.jpg" /></a></dt>
                                        <dd><a href="">外贸田园绗缝全棉布艺双人沙发垫沙发巾飘窗垫素雅黄花</a></dd>
                                        <dd> 商城价：<em>256.00</em>元</dd>
                                    </dl>
                                </li>
                                
                                <li>
                                    <dl>
                                        <dt><a href=""><img src="/Public/sc/images/365_7d5e08127b8d6799209674ecffbfc624.jpg_small.jpg" /></a></dt>
                                        <dd><a href="">外贸田园绗缝全棉布艺双人沙发垫沙发巾飘窗垫素雅黄花</a></dd>
                                        <dd> 商城价：<em>256.00</em>元</dd>
                                    </dl>
                                </li>
                                
                                <li>
                                    <dl>
                                        <dt><a href=""><img src="/Public/sc/images/365_7d5e08127b8d6799209674ecffbfc624.jpg_small.jpg" /></a></dt>
                                        <dd><a href="">外贸田园绗缝全棉布艺双人沙发垫沙发巾飘窗垫素雅黄花</a></dd>
                                        <dd> 商城价：<em>256.00</em>元</dd>
                                    </dl>
                                </li>
                                
                            </ul>
                        </div>
                        <div id="tuijian_content_3" class="tuijian_shangpin tuijian_content">
                            <ul>
                                <li>
                                    <dl>
                                        <dt><a href=""><img src="/Public/sc/images/365_7d5e08127b8d6799209674ecffbfc624.jpg_small.jpg" /></a></dt>
                                        <dd><a href="">3333333全棉布艺双人沙发垫沙发巾飘窗垫素雅黄花</a></dd>
                                        <dd> 商城价：<em>256.00</em>元</dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt><a href=""><img src="/Public/sc/images/365_7d5e08127b8d6799209674ecffbfc624.jpg_small.jpg" /></a></dt>
                                        <dd><a href="">外贸田园绗缝全棉布艺双人沙发垫沙发巾飘窗垫素雅黄花</a></dd>
                                        <dd> 商城价：<em>256.00</em>元</dd>
                                    </dl>
                                </li>
                                
                                <li>
                                    <dl>
                                        <dt><a href=""><img src="/Public/sc/images/365_7d5e08127b8d6799209674ecffbfc624.jpg_small.jpg" /></a></dt>
                                        <dd><a href="">外贸田园绗缝全棉布艺双人沙发垫沙发巾飘窗垫素雅黄花</a></dd>
                                        <dd> 商城价：<em>256.00</em>元</dd>
                                    </dl>
                                </li>
                                
                                <li>
                                    <dl>
                                        <dt><a href=""><img src="/Public/sc/images/365_7d5e08127b8d6799209674ecffbfc624.jpg_small.jpg" /></a></dt>
                                        <dd><a href="">外贸田园绗缝全棉布艺双人沙发垫沙发巾飘窗垫素雅黄花</a></dd>
                                        <dd> 商城价：<em>256.00</em>元</dd>
                                    </dl>
                                </li>
                                
                            </ul>
                        </div>
                        
                    </div>

                </div>
                <!-- 特别推荐 End -->
                
                <!-- 首发 -->
                <div class="shop_bd_shoufa"><img src="images/shoufa.jpg" /></div>
                <!-- 首发 End -->
                
            </div>
            <div class="clear"></div>
            <!-- 第二块区域 End -->
            
            <!-- 第三块区域 男女服饰 -->
            <div class="shop_bd_home_block clearfix">
                
                <!-- 左边 -->
                <div class="shop_bd_home_block_left">
                    <div class="shop_bd_home_block_left_logo block_nvzhuang_logo"></div>
                    <div class="shop_hd_home_block_left_class clearfix">
                        <dl class="clearfix">
                            <dt>女装</dt>
                            <dd>
                                <a href="">棉衣</a>
                                <a href="">毛呢大衣</a>
                                <a href="">风衣</a>
                                <a href="">打底衫</a>
                                <a href="">情侣装</a>
                                <a href="">毛呢短裤</a>
                                <a href="">牛仔裤</a>
                                <a href="">加绒打...</a>
                                <a href="">小脚裤</a>
                                <a href="">半身裙</a>
                            </dd>
                        </dl>
                        
                        <dl class="clearfix">
                            <dt>男装</dt>
                            <dd>
                                <a href="">羽绒服</a>
                                <a href="">卫衣</a>
                                <a href="">长袖T桖</a>
                                <a href="">长袖衬衫</a>
                                <a href="">风衣</a>
                                <a href="">休闲西装</a>
                                <a href="">棉衣</a>
                                <a href="">休闲长裤</a>
                                <a href="">内衣内裤</a>
                            </dd>
                        </dl>
                        
                    </div>
                    <div class="shop_bd_home_block_left_pic">
                        <a href=""><img src="images/web-1-13_53bfbfc958cb55a435545033bd075bf3.png"/></a>
                    </div>
                </div>
                <!-- 左边 End -->
                
                <!-- 中间 -->
                <div class="shop_bd_home_block_center">
                    <ul class="tabs-nav">
                        <li><a href="javascript:void(0);">男女服饰</a></li>
                    </ul>
                    <div class="tabs-panel">
                        <ul>
                            <li>
                                <dl>
                                    <dt><a href=""><img src="images/04fb225ea46bd1346f330400eedb7ef2.jpg_small.jpg" /></a></dt>
                                    <dd><a href="">正品都市时尚女装假两件优雅针织衫</a></dd>
                                    <dd>商城价：<em>182.00</em>元</dd>
                                </dl>
                            </li>
                            
                            <li>
                                <dl>
                                    <dt><a href=""><img src="images/04fb225ea46bd1346f330400eedb7ef2.jpg_small.jpg" /></a></dt>
                                    <dd><a href="">正品都市时尚女装假两件优雅针织衫</a></dd>
                                    <dd>商城价：<em>182.00</em>元</dd>
                                </dl>
                            </li>
                            
                            <li>
                                <dl>
                                    <dt><a href=""><img src="images/04fb225ea46bd1346f330400eedb7ef2.jpg_small.jpg" /></a></dt>
                                    <dd><a href="">正品都市时尚女装假两件优雅针织衫</a></dd>
                                    <dd>商城价：<em>182.00</em>元</dd>
                                </dl>
                            </li>
                            
                            <li>
                                <dl>
                                    <dt><a href=""><img src="images/04fb225ea46bd1346f330400eedb7ef2.jpg_small.jpg" /></a></dt>
                                    <dd><a href="">正品都市时尚女装假两件优雅针织衫</a></dd>
                                    <dd>商城价：<em>182.00</em>元</dd>
                                </dl>
                            </li>
                            
                            <li>
                                <dl>
                                    <dt><a href=""><img src="images/04fb225ea46bd1346f330400eedb7ef2.jpg_small.jpg" /></a></dt>
                                    <dd><a href="">正品都市时尚女装假两件优雅针织衫</a></dd>
                                    <dd>商城价：<em>182.00</em>元</dd>
                                </dl>
                            </li>
                            
                            <li>
                                <dl>
                                    <dt><a href=""><img src="images/04fb225ea46bd1346f330400eedb7ef2.jpg_small.jpg" /></a></dt>
                                    <dd><a href="">正品都市时尚女装假两件优雅针织衫</a></dd>
                                    <dd>商城价：<em>182.00</em>元</dd>
                                </dl>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <!-- 中间 End -->
                
                <!-- 右边商品排行 -->
                <div class="shop_bd_home_block_right">
                    <div class="title"><h3>商品排行</h3></div>
                    <ol class="saletop-list">
                        <li class="top clearfix">
                            <dl>
                                <dt class="goods-name">
                                    <a href="">正品都市时尚女装假两件优雅针</a>
                                </dt>
                                <dd class="nokey">1</dd>
                                <dd class="goods-pic">
                                    <a href=""><span class="thumb size60"><img src="images/3f81874d594894d19150843c42fb1f8e.jpg_small.jpg" /></span></a>
                                </dd>
                                <dd class="goods-price"><em>398.00</em></dd>
                            </dl>
                        </li>
                        <li class="top clearfix">
                            <dl>
                                <dt class="goods-name">
                                    <a href="">正品都市时尚女装假两件优雅针</a>
                                </dt>
                                <dd class="nokey">2</dd>
                                <dd class="goods-pic">
                                    <a href=""><span class="thumb size60"><img src="images/3f81874d594894d19150843c42fb1f8e.jpg_small.jpg" /></span></a>
                                </dd>
                                <dd class="goods-price"><em>398.00</em></dd>
                            </dl>
                        </li>
                        <li class="top clearfix">
                            <dl>
                                <dt class="goods-name">
                                    <a href="">正品都市时尚女装假两件优雅针</a>
                                </dt>
                                <dd class="nokey">3</dd>
                                <dd class="goods-pic">
                                    <a href=""><span class="thumb size60"><img src="images/3f81874d594894d19150843c42fb1f8e.jpg_small.jpg" /></span></a>
                                </dd>
                                <dd class="goods-price"><em>398.00</em></dd>
                            </dl>
                        </li>
                        
                        <li class="normal">
                            <i>4</i>
                            <a href="">2011秋冬新款韩版大码毛领毛呢外套呢子大衣【演示数据】</a>
                        </li>
                        <li class="normal">
                            <i>5</i>
                            <a href="">2011秋冬新款韩版大码毛领毛呢外套呢子大衣【演示数据】</a>
                        </li>
                        <li class="normal">
                            <i>6</i>
                            <a href="">2011秋冬新款韩版大码毛领毛呢外套呢子大衣【演示数据】</a>
                        </li>
                        <li class="normal">
                            <i>7</i>
                            <a href="">2011秋冬新款韩版大码毛领毛呢外套呢子大衣【演示数据】</a>
                        </li>
                        
                    </ol>
                    <div class="saletop-list_adv_pic"><a href=""><img src="images/web-3-38_ff9bd2d724f7138cec1b1937000f4feb.jpg" /></a></div>
                </div>
                <!-- 右边商品排行 -->
                
                <!-- 品牌展示 -->
                <div class="shop_bd_home_block_bottom">
                    <ul class="">
                        <li><a href=""><img src="images/354b80528d2fbeefbab33c563532517e.gif" /></a></li>
                        <li><a href=""><img src="images/1d2dfbead590510046a6522551db8139.gif" /></a></li>
                        <li><a href=""><img src="images/26247430b09daa1b441b46008bfb6e6e.gif" /></a></li>
                        <li><a href=""><img src="images/a0ac8c6d2d3dc1470d5876923182a8e2.gif" /></a></li>
                        <li><a href=""><img src="images/9c5dee77a6ecdafd9e152fed8c6a4e90.gif" /></a></li>
                        <li><a href=""><img src="images/b175883eba95e793affb1b1ebbbf85a5.gif" /></a></li>
                        <li><a href=""><img src="images/6e61a1c953e5bc8c5f1ffdac36862245.gif" /></a></li>
                        <li><a href=""><img src="images/209abd835cd2ce2208f2dc42ba10efb4.gif" /></a></li>
                    </ul>
                </div>
                <!-- 品牌展示 End -->
                
            </div>
            <div clas="clear"></div>
            <!-- 第三块区域 End -->
            
            <!-- 第四块区域 男女服饰 -->
            <div class="shop_bd_home_block clearfix">
                
                <!-- 左边 -->
                <div class="shop_bd_home_block_left">
                    <div class="shop_bd_home_block_left_logo block_nvzhuang_logo"></div>
                    <div class="shop_hd_home_block_left_class clearfix">
                        <dl class="clearfix">
                            <dt>女装</dt>
                            <dd>
                                <a href="">棉衣</a>
                                <a href="">毛呢大衣</a>
                                <a href="">风衣</a>
                                <a href="">打底衫</a>
                                <a href="">情侣装</a>
                                <a href="">毛呢短裤</a>
                                <a href="">牛仔裤</a>
                                <a href="">加绒打...</a>
                                <a href="">小脚裤</a>
                                <a href="">半身裙</a>
                            </dd>
                        </dl>
                        
                        <dl class="clearfix">
                            <dt>男装</dt>
                            <dd>
                                <a href="">羽绒服</a>
                                <a href="">卫衣</a>
                                <a href="">长袖T桖</a>
                                <a href="">长袖衬衫</a>
                                <a href="">风衣</a>
                                <a href="">休闲西装</a>
                                <a href="">棉衣</a>
                                <a href="">休闲长裤</a>
                                <a href="">内衣内裤</a>
                            </dd>
                        </dl>
                        
                    </div>
                    <div class="shop_bd_home_block_left_pic">
                        <a href=""><img src="images/web-1-13_53bfbfc958cb55a435545033bd075bf3.png"/></a>
                    </div>
                </div>
                <!-- 左边 End -->
                
                <!-- 中间 -->
                <div class="shop_bd_home_block_center">
                    <ul class="tabs-nav">
                        <li><a href="javascript:void(0);">男女服饰</a></li>
                    </ul>
                    <div class="tabs-panel">
                        <ul>
                            <li>
                                <dl>
                                    <dt><a href=""><img src="images/04fb225ea46bd1346f330400eedb7ef2.jpg_small.jpg" /></a></dt>
                                    <dd><a href="">正品都市时尚女装假两件优雅针织衫</a></dd>
                                    <dd>商城价：<em>182.00</em>元</dd>
                                </dl>
                            </li>
                            
                            <li>
                                <dl>
                                    <dt><a href=""><img src="images/04fb225ea46bd1346f330400eedb7ef2.jpg_small.jpg" /></a></dt>
                                    <dd><a href="">正品都市时尚女装假两件优雅针织衫</a></dd>
                                    <dd>商城价：<em>182.00</em>元</dd>
                                </dl>
                            </li>
                            
                            <li>
                                <dl>
                                    <dt><a href=""><img src="images/04fb225ea46bd1346f330400eedb7ef2.jpg_small.jpg" /></a></dt>
                                    <dd><a href="">正品都市时尚女装假两件优雅针织衫</a></dd>
                                    <dd>商城价：<em>182.00</em>元</dd>
                                </dl>
                            </li>
                            
                            <li>
                                <dl>
                                    <dt><a href=""><img src="images/04fb225ea46bd1346f330400eedb7ef2.jpg_small.jpg" /></a></dt>
                                    <dd><a href="">正品都市时尚女装假两件优雅针织衫</a></dd>
                                    <dd>商城价：<em>182.00</em>元</dd>
                                </dl>
                            </li>
                            
                            <li>
                                <dl>
                                    <dt><a href=""><img src="images/04fb225ea46bd1346f330400eedb7ef2.jpg_small.jpg" /></a></dt>
                                    <dd><a href="">正品都市时尚女装假两件优雅针织衫</a></dd>
                                    <dd>商城价：<em>182.00</em>元</dd>
                                </dl>
                            </li>
                            
                            <li>
                                <dl>
                                    <dt><a href=""><img src="images/04fb225ea46bd1346f330400eedb7ef2.jpg_small.jpg" /></a></dt>
                                    <dd><a href="">正品都市时尚女装假两件优雅针织衫</a></dd>
                                    <dd>商城价：<em>182.00</em>元</dd>
                                </dl>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <!-- 中间 End -->
                
                <!-- 右边商品排行 -->
                <div class="shop_bd_home_block_right">
                    <div class="title"><h3>商品排行</h3></div>
                    <ol class="saletop-list">
                        <li class="top clearfix">
                            <dl>
                                <dt class="goods-name">
                                    <a href="">正品都市时尚女装假两件优雅针</a>
                                </dt>
                                <dd class="nokey">1</dd>
                                <dd class="goods-pic">
                                    <a href=""><span class="thumb size60"><img src="images/3f81874d594894d19150843c42fb1f8e.jpg_small.jpg" /></span></a>
                                </dd>
                                <dd class="goods-price"><em>398.00</em></dd>
                            </dl>
                        </li>
                        <li class="top clearfix">
                            <dl>
                                <dt class="goods-name">
                                    <a href="">正品都市时尚女装假两件优雅针</a>
                                </dt>
                                <dd class="nokey">2</dd>
                                <dd class="goods-pic">
                                    <a href=""><span class="thumb size60"><img src="images/3f81874d594894d19150843c42fb1f8e.jpg_small.jpg" /></span></a>
                                </dd>
                                <dd class="goods-price"><em>398.00</em></dd>
                            </dl>
                        </li>
                        <li class="top clearfix">
                            <dl>
                                <dt class="goods-name">
                                    <a href="">正品都市时尚女装假两件优雅针</a>
                                </dt>
                                <dd class="nokey">3</dd>
                                <dd class="goods-pic">
                                    <a href=""><span class="thumb size60"><img src="images/3f81874d594894d19150843c42fb1f8e.jpg_small.jpg" /></span></a>
                                </dd>
                                <dd class="goods-price"><em>398.00</em></dd>
                            </dl>
                        </li>
                        
                        <li class="normal">
                            <i>4</i>
                            <a href="">2011秋冬新款韩版大码毛领毛呢外套呢子大衣【演示数据】</a>
                        </li>
                        <li class="normal">
                            <i>5</i>
                            <a href="">2011秋冬新款韩版大码毛领毛呢外套呢子大衣【演示数据】</a>
                        </li>
                        <li class="normal">
                            <i>6</i>
                            <a href="">2011秋冬新款韩版大码毛领毛呢外套呢子大衣【演示数据】</a>
                        </li>
                        <li class="normal">
                            <i>7</i>
                            <a href="">2011秋冬新款韩版大码毛领毛呢外套呢子大衣【演示数据】</a>
                        </li>
                        
                    </ol>
                    <div class="saletop-list_adv_pic"><a href=""><img src="images/web-3-38_ff9bd2d724f7138cec1b1937000f4feb.jpg" /></a></div>
                </div>
                <!-- 右边商品排行 -->
                
                <!-- 品牌展示 -->
                <div class="shop_bd_home_block_bottom">
                    <ul class="">
                        <li><a href=""><img src="images/354b80528d2fbeefbab33c563532517e.gif" /></a></li>
                        <li><a href=""><img src="images/1d2dfbead590510046a6522551db8139.gif" /></a></li>
                        <li><a href=""><img src="images/26247430b09daa1b441b46008bfb6e6e.gif" /></a></li>
                        <li><a href=""><img src="images/a0ac8c6d2d3dc1470d5876923182a8e2.gif" /></a></li>
                        <li><a href=""><img src="images/9c5dee77a6ecdafd9e152fed8c6a4e90.gif" /></a></li>
                        <li><a href=""><img src="images/b175883eba95e793affb1b1ebbbf85a5.gif" /></a></li>
                        <li><a href=""><img src="images/6e61a1c953e5bc8c5f1ffdac36862245.gif" /></a></li>
                        <li><a href=""><img src="images/209abd835cd2ce2208f2dc42ba10efb4.gif" /></a></li>
                    </ul>
                </div>
                <!-- 品牌展示 End -->
                
            </div>
            <div clas="clear"></div>
            <!-- 第四块区域 End -->
            
            <!-- 第五块区域 男女服饰 -->
            <div class="shop_bd_home_block clearfix">
                
                <!-- 左边 -->
                <div class="shop_bd_home_block_left">
                    <div class="shop_bd_home_block_left_logo block_nvzhuang_logo"></div>
                    <div class="shop_hd_home_block_left_class clearfix">
                        <dl class="clearfix">
                            <dt>女装</dt>
                            <dd>
                                <a href="">棉衣</a>
                                <a href="">毛呢大衣</a>
                                <a href="">风衣</a>
                                <a href="">打底衫</a>
                                <a href="">情侣装</a>
                                <a href="">毛呢短裤</a>
                                <a href="">牛仔裤</a>
                                <a href="">加绒打...</a>
                                <a href="">小脚裤</a>
                                <a href="">半身裙</a>
                            </dd>
                        </dl>
                        
                        <dl class="clearfix">
                            <dt>男装</dt>
                            <dd>
                                <a href="">羽绒服</a>
                                <a href="">卫衣</a>
                                <a href="">长袖T桖</a>
                                <a href="">长袖衬衫</a>
                                <a href="">风衣</a>
                                <a href="">休闲西装</a>
                                <a href="">棉衣</a>
                                <a href="">休闲长裤</a>
                                <a href="">内衣内裤</a>
                            </dd>
                        </dl>
                        
                    </div>
                    <div class="shop_bd_home_block_left_pic">
                        <a href=""><img src="images/web-1-13_53bfbfc958cb55a435545033bd075bf3.png"/></a>
                    </div>
                </div>
                <!-- 左边 End -->
                
                <!-- 中间 -->
                <div class="shop_bd_home_block_center">
                    <ul class="tabs-nav">
                        <li><a href="javascript:void(0);">男女服饰</a></li>
                    </ul>
                    <div class="tabs-panel">
                        <ul>
                            <li>
                                <dl>
                                    <dt><a href=""><img src="images/04fb225ea46bd1346f330400eedb7ef2.jpg_small.jpg" /></a></dt>
                                    <dd><a href="">正品都市时尚女装假两件优雅针织衫</a></dd>
                                    <dd>商城价：<em>182.00</em>元</dd>
                                </dl>
                            </li>
                            
                            <li>
                                <dl>
                                    <dt><a href=""><img src="images/04fb225ea46bd1346f330400eedb7ef2.jpg_small.jpg" /></a></dt>
                                    <dd><a href="">正品都市时尚女装假两件优雅针织衫</a></dd>
                                    <dd>商城价：<em>182.00</em>元</dd>
                                </dl>
                            </li>
                            
                            <li>
                                <dl>
                                    <dt><a href=""><img src="images/04fb225ea46bd1346f330400eedb7ef2.jpg_small.jpg" /></a></dt>
                                    <dd><a href="">正品都市时尚女装假两件优雅针织衫</a></dd>
                                    <dd>商城价：<em>182.00</em>元</dd>
                                </dl>
                            </li>
                            
                            <li>
                                <dl>
                                    <dt><a href=""><img src="images/04fb225ea46bd1346f330400eedb7ef2.jpg_small.jpg" /></a></dt>
                                    <dd><a href="">正品都市时尚女装假两件优雅针织衫</a></dd>
                                    <dd>商城价：<em>182.00</em>元</dd>
                                </dl>
                            </li>
                            
                            <li>
                                <dl>
                                    <dt><a href=""><img src="images/04fb225ea46bd1346f330400eedb7ef2.jpg_small.jpg" /></a></dt>
                                    <dd><a href="">正品都市时尚女装假两件优雅针织衫</a></dd>
                                    <dd>商城价：<em>182.00</em>元</dd>
                                </dl>
                            </li>
                            
                            <li>
                                <dl>
                                    <dt><a href=""><img src="images/04fb225ea46bd1346f330400eedb7ef2.jpg_small.jpg" /></a></dt>
                                    <dd><a href="">正品都市时尚女装假两件优雅针织衫</a></dd>
                                    <dd>商城价：<em>182.00</em>元</dd>
                                </dl>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <!-- 中间 End -->
                
                <!-- 右边商品排行 -->
                <div class="shop_bd_home_block_right">
                    <div class="title"><h3>商品排行</h3></div>
                    <ol class="saletop-list">
                        <li class="top clearfix">
                            <dl>
                                <dt class="goods-name">
                                    <a href="">正品都市时尚女装假两件优雅针</a>
                                </dt>
                                <dd class="nokey">1</dd>
                                <dd class="goods-pic">
                                    <a href=""><span class="thumb size60"><img src="images/3f81874d594894d19150843c42fb1f8e.jpg_small.jpg" /></span></a>
                                </dd>
                                <dd class="goods-price"><em>398.00</em></dd>
                            </dl>
                        </li>
                        <li class="top clearfix">
                            <dl>
                                <dt class="goods-name">
                                    <a href="">正品都市时尚女装假两件优雅针</a>
                                </dt>
                                <dd class="nokey">2</dd>
                                <dd class="goods-pic">
                                    <a href=""><span class="thumb size60"><img src="images/3f81874d594894d19150843c42fb1f8e.jpg_small.jpg" /></span></a>
                                </dd>
                                <dd class="goods-price"><em>398.00</em></dd>
                            </dl>
                        </li>
                        <li class="top clearfix">
                            <dl>
                                <dt class="goods-name">
                                    <a href="">正品都市时尚女装假两件优雅针</a>
                                </dt>
                                <dd class="nokey">3</dd>
                                <dd class="goods-pic">
                                    <a href=""><span class="thumb size60"><img src="images/3f81874d594894d19150843c42fb1f8e.jpg_small.jpg" /></span></a>
                                </dd>
                                <dd class="goods-price"><em>398.00</em></dd>
                            </dl>
                        </li>
                        
                        <li class="normal">
                            <i>4</i>
                            <a href="">2011秋冬新款韩版大码毛领毛呢外套呢子大衣【演示数据】</a>
                        </li>
                        <li class="normal">
                            <i>5</i>
                            <a href="">2011秋冬新款韩版大码毛领毛呢外套呢子大衣【演示数据】</a>
                        </li>
                        <li class="normal">
                            <i>6</i>
                            <a href="">2011秋冬新款韩版大码毛领毛呢外套呢子大衣【演示数据】</a>
                        </li>
                        <li class="normal">
                            <i>7</i>
                            <a href="">2011秋冬新款韩版大码毛领毛呢外套呢子大衣【演示数据】</a>
                        </li>
                        
                    </ol>
                    <div class="saletop-list_adv_pic"><a href=""><img src="images/web-3-38_ff9bd2d724f7138cec1b1937000f4feb.jpg" /></a></div>
                </div>
                <!-- 右边商品排行 -->
                
                <!-- 品牌展示 -->
                <div class="shop_bd_home_block_bottom">
                    <ul class="">
                        <li><a href=""><img src="images/354b80528d2fbeefbab33c563532517e.gif" /></a></li>
                        <li><a href=""><img src="images/1d2dfbead590510046a6522551db8139.gif" /></a></li>
                        <li><a href=""><img src="images/26247430b09daa1b441b46008bfb6e6e.gif" /></a></li>
                        <li><a href=""><img src="images/a0ac8c6d2d3dc1470d5876923182a8e2.gif" /></a></li>
                        <li><a href=""><img src="images/9c5dee77a6ecdafd9e152fed8c6a4e90.gif" /></a></li>
                        <li><a href=""><img src="images/b175883eba95e793affb1b1ebbbf85a5.gif" /></a></li>
                        <li><a href=""><img src="images/6e61a1c953e5bc8c5f1ffdac36862245.gif" /></a></li>
                        <li><a href=""><img src="images/209abd835cd2ce2208f2dc42ba10efb4.gif" /></a></li>
                    </ul>
                </div>
                <!-- 品牌展示 End -->
                
            </div>
            <div clas="clear"></div>
            <!-- 第五块区域 End -->
            
            <div class="faq">
                <dl>
                    <dt>帮助中心</dt>
                    <dd><a href=""><span>积分兑换说明</span></a></dd>
                    <dd><a href=""><span>积分明细</span></a></dd>
                    <dd><a href=""><span>查看已购买商</span></a></dd>
                    <dd><a href=""><span>我要买</span></a></dd>
                    <dd><a href=""><span>忘记密码</span></a></dd>
                </dl>
                
                <dl>
                    <dt>店主之家</dt>
                    <dd><a href=""><span>如何申请开店</span></a></dd>
                    <dd><a href=""><span>商城商品推荐</span></a></dd>
                    <dd><a href=""><span>如何发货</span></a></dd>
                    <dd><a href=""><span>查看已售商品</span></a></dd>
                    <dd><a href=""><span>如何管理店铺</span></a></dd>
                </dl>
                
                <dl>
                    <dt>支付方式</dt>
                    <dd><a href=""><span>公司转账</span></a></dd>
                    <dd><a href=""><span>邮局汇款</span></a></dd>
                    <dd><a href=""><span>分期付款</span></a></dd>
                    <dd><a href=""><span>在线支付</span></a></dd>
                    <dd><a href=""><span>如何注册支付</span></a></dd>
                </dl>
                
                <dl>
                    <dt>售后服务</dt>
                    <dd><a href=""><span>退款申请</span></a></dd>
                    <dd><a href=""><span>返修/退换货</span></a></dd>
                    <dd><a href=""><span>退换货流程</span></a></dd>
                    <dd><a href=""><span>退换货政策</span></a></dd>
                    <dd><a href=""><span>联系卖家</span></a></dd>
                </dl>
                
                <dl>
                    <dt>客服中心</dt>
                    <dd><a href=""><span>修改收货地址</span></a></dd>
                    <dd><a href=""><span>商品发布</span></a></dd>
                    <dd><a href=""><span>会员修改个人</span></a></dd>
                    <dd><a href=""><span>会员修改密码</span></a></dd>
                    
                </dl>
                
                <dl>
                    <dt>关于我们</dt>
                    <dd><a href=""><span>合作及洽谈</span></a></dd>
                    <dd><a href=""><span>招聘英才</span></a></dd>
                    <dd><a href=""><span>联系我们</span></a></dd>
                    <dd><a href=""><span>关于Shop</span></a></dd>
                </dl>
                
                
            </div>
            <div class="clear"></div>
	</div>
	<!-- Body End -->

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
</body>
</html>