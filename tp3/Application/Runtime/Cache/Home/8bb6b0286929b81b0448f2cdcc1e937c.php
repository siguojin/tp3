<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>ecshop商城开发首页-清心老师</title>
<!--引用css样式-->
<link type="text/css" rel="stylesheet" href="/Public/cd/css/basic.css" >
 </head>
 <body>

<!--网站顶部开始-->
<div id="TopMain">
	<!-- 广告开始 -->
	 <div id="topAdv"> 
		<a href="#"> <img src="/Public/cd/images/ss.jpg" /> </a> 
		<img src="/Public/cd/images/ss.png"  class="close"/>
	 </div>
	<!-- 广告结束-->  

	<!--Top开始-->
	<div id="Top">
		<div class="banner"><a href="#"><img src="/Public/cd/images/logo.png" /></a></div>
		<!--search begin-->
		<div class="search">
			<form>
				<input type="text"  class="txt"/>
				<input type="submit" class="but"  value=""/>
			</form>
		</div>
		<!--search end-->
		<div class="user">
			<!--用户登录前状态-->
			<font><span class="iconfont">&#xe60b;</span><a href="Login.html">登录</a></font>
			<font><span class="iconfont">&#xe60e;</span><a href="register.html">注册</a></font>
			<font><span class="iconfont">&#xe60e;</span><a href="<?php echo U('add');?>">添加食物</a></font>
		

			<!--用户登录后状态
			您好！wlm123,欢迎你回来 <a href="" class="usertxt">用户中心</a>｜<a href="" class="usertxt">退出</a>-->

			<font><span class="iconfont">&#xe646;</span><a href="dd.html" target="_blank">加入购车</a></font>
		</div>
	</div>
	<!--Top结束-->
</div>
<!--网站顶部结束-->


<!--导航开始-->
<div id="Logo" >
	<ul>
		<li class="first"><span class="iconfont">&#xe627;</span>全部商品分类</li>
		<li><a href="<?php echo U('Product');?>" >首页</a></li>
		<li><a href="<?php echo U('Product');?>" >节日礼物</a></li>
		<li><a href="<?php echo U('Product');?>">麻辣小吃</a></li>
		<li><a href="<?php echo U('Product');?>">蛋糕</a></li>
		<li><a href="<?php echo U('Product');?>">水果</a></li>
		<li><a href="<?php echo U('Product');?>">饮品</a></li>
		<li><a href="<?php echo U('Product');?>">零食</a></li>
		<li class="last"></li>
	</ul>
</div>
<!--导航结束-->


<!--头部焦点部分开始-->
<div id="Foucs">
	<div class="FoucsCon">
		<!--菜单开始-->
		<div class="Menu">
			<ul>
			<?php if(is_array($info)): foreach($info as $key=>$vo): ?><li>
					<h3><?php echo ($vo["user"]); ?></h3>
					<p><a href=""><?php echo ($vo["user"]); ?></a><a href=""><?php echo ($vo["user"]); ?></a><a href=""><?php echo ($vo["user"]); ?></a><a href=""><?php echo ($vo["user"]); ?></a></p>
					<div class="moreNav">
						

					</div>
					<div class="border_top"></div>
					<div class="border_bottom"></div>
					<div class="border_right"></div>
				</li><?php endforeach; endif; ?>
			<!-- 	<li>
					<h3>蛋糕</h3>
					<p><a href="">聚会</a><a href="">芒果</a><a href="">抹茶</a><a href="">爆浆</a></p>
					<div class="moreNav">
						

					</div>
					<div class="border_top"></div>
					<div class="border_bottom"></div>
					<div class="border_right"></div>
				</li>
				<li>
					<h3>节日礼物</h3>
					<p><a href="">生日</a><a href="">表白</a><a href="">订婚</a><a href="">结婚</a></p>
					<div class="moreNav"></div>
					<div class="border_top"></div>
					<div class="border_bottom"></div>
					<div class="border_right"></div>
				</li>
				<li>
					<h3>蛋糕</h3>
					<p><a href="">聚会</a><a href="">芒果</a><a href="">抹茶</a><a href="">爆浆</a></p>
					<div class="moreNav">
						

					</div>
					<div class="border_top"></div>
					<div class="border_bottom"></div>
					<div class="border_right"></div>
				</li>
				<li>
					<h3>蛋糕</h3>
					<p><a href="">聚会</a><a href="">芒果</a><a href="">抹茶</a><a href="">爆浆</a></p>
					<div class="moreNav">
						

					</div>
					<div class="border_top"></div>
					<div class="border_bottom"></div>
					<div class="border_right"></div>
				</li>
				<<li>
					<h3>蛋糕</h3>
					<p><a href="">聚会</a><a href="">芒果</a><a href="">抹茶</a><a href="">爆浆</a></p>
					<div class="moreNav">
						

					</div>
					<div class="border_top"></div>
					<div class="border_bottom"></div>
					<div class="border_right"></div>
				</li> -->
			</ul>
		</div>
		<!--菜单结束-->

		<!--轮播图开始-->
		<div class="flash">
			<!--左右切换按扭-->
			<a href="javascript:void(0)" class="prev"></a>
			<a href="javascript:void(0)" class="next"></a>

			<!--图片滚动部分-->
			
			<!-- <div class="scroll"> -->
			<?php if(is_array($list)): foreach($list as $key=>$v): ?><a href="goods.html" target="_blank"><img src="/Uploads/<?php echo ($v["file"]); ?>"  style="left:0px;"/></a><?php endforeach; endif; ?>
				<!-- <img src="images/mian.png" />

				<img src="images/mian.png" />
				<img src="images/flash4.jpg" />
				<img src="images/flash5.png" />
				<img src="images/flash6.jpg" /> -->
			<!-- </div> -->
			

			<!--滚动按扭部分-->
			<div class="But">
				<span class="hover"></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
		<!--轮播图结束-->
		
		<!--新闻中心开始-->
		<div class="news">
			<div class="newsOpacity"></div>
			<div class="newsCon">
				<!--潭州快讯 开始-->
				<div class="newsKx">
					<h3>潭州快讯</h3>
					<ul>
						<li><a href="" class="first" title="618店庆趴 爆品嗨抢"><font>[ 特惠 ]</font> 618店庆趴 爆品嗨抢</a></li>
						<li><a href="" title="“让爱飘香”公益"><font>[ 公告 ]</font>“让爱飘香”公益</a></li>
						<li><a href="" title="618商品全场五折"><font>[ 特惠 ]</font> 618商品全场五折</a></li>
						<li><a href="" title="618店庆趴 爆品嗨抢"><font>[ 特惠 ]</font> 618店庆趴 爆品嗨抢</a></li>
						<li><a href="" title="“让爱飘香”公益"><font>[ 公告 ]</font>“让爱飘香”公益</a></li>
					</ul>
				</div>
				<!--潭州快讯 结束-->


				<div class="newsKx Datatx">
					<h3>节日提醒</h3>
					<ul>
						<li><a href="" title="[ 6.21 ] 火锅">[ 6.21 ] 火锅  <font>进入专题页</font></a></li>
						<li><a href="" title="[ 8.21 ] 速食">[ 8.21 ] 速食 <font>进入专题页</font></a></li>
						<li><a href="" title="[ 11.11 ]冷饮 ">[ 11.11 ] 冷饮 <font>进入专题页</font></a></li>
						<li><a href="" title="[ 11.11 ] 零食">[ 11.11 ] 零食 <font>进入专题页</font></a></li>

					</ul>
				</div>




			</div>		
		</div>
		<!--新闻中心开始-->
	<div style="clear:both"></div></div>
</div>
<!--头部焦点部分结束-->


<!--热销推荐开始-->



<!--头部活动部分开始-->
<div id="TopEvent">
	<!--Part2L start-->
	<div class="TopEventL">
		<P class="ti">
			<span class="hover">天天低价</span>
			<span>商城推荐</span>
			<span>新品速递</span>
			<span>猜你喜欢</span>
		</p>

		
	</div>
	<!--Part2L end-->

	<!--Part2R start-->
	<div class="TopEventR">
		<p class="ti"><span class="hover">热门活动</span><span>频道精选</span></p>
		<div class="Intro">
			<div class="box">
				<img src="images/jr_img5.jpg" width='200' height='200' />
				<h3>个性定制水晶音乐盒摆件</h3>
				<p>
					<font>4</font>天
					<font>22</font>小时
					<font>36</font>分
					<font>05</font>秒
				</p>
			</div>
			<div class="box"></div>
		</div>
	</div>
	<!--Part2R end-->
</div>
<!--头部活动部分结束-->





	
<!--第四部分蛋糕开始-->
<div id="Cake"  class="Part4">
	<p class="ti">生日蛋糕</p>
	<div class="Con">
		<div class="ConL">
			<ul>
				<li class="first">
					<dl>
						<dt><img src="images/bimg.png"  width="268" height='268'/></dt>
						<dd class="ti">巧克力水果奶油蛋糕双层</dd>
						<dd class="info">简单介绍：</dd>
						<dd class="infos">我为您搭建的，是光彩缤纷的世界，是畅想甜蜜的世界，是欢乐的爱心世界！蛋糕在哪里，你的爱心就散播在哪里</dd>
						<dd class="but"><img src="images/buy.png" /><img src="images/join.png" /></dd>
					</dl>

				</li>
				
				

			
			</ul>
		</div>

		
	<div style="clear:both"></div></div>
</div>
<!--第四部分蛋糕结束-->


<!--第五部分节日礼物开始-->



<!--第五部分节日礼物结束-->


<!--网站底部开始-->
<img src="images/f.jpg"  class="fbg"/>
<div id="Footer2">
	<dl class="first">
		<dt><a href="#">关于我们</a></dt>
		<dd><a href="#">诚聘英才</a></dd>
		<dd><a href="#">品牌美食入驻</a></dd>
		<dd><a href="#">美食</a></dd>
	</dl>
	<dl>
		<dt><a href="#">关于我们</a></dt>
		<dd><a href="#">诚聘英才</a></dd>
		<dd><a href="#">品牌美食入驻</a></dd>
		<dd><a href="#">美食</a></dd>
	</dl>
	<dl>
		<dt><a href="#">关于我们</a></dt>
		<dd><a href="#">诚聘英才</a></dd>
		<dd><a href="#">品牌美食入驻</a></dd>
		<dd><a href="#">美食</a></dd>
	</dl>
	<dl>
		<dt><a href="#">关于我们</a></dt>
		<dd><a href="#">诚聘英才</a></dd>
		<dd><a href="#">品牌美食入驻</a></dd>
		<dd><a href="#">美食</a></dd>
	</dl>
	<dl>
		<dt><a href="#">关于我们</a></dt>
		<dd><a href="#">诚聘英才</a></dd>
		<dd><a href="#">品牌美食入驻</a></dd>
		<dd><a href="#">美食</a></dd>
	</dl>
	<dl>
		<dt><a href="#">关于我们</a></dt>
		<dd><a href="#">诚聘英才</a></dd>
		<dd><a href="#">品牌美食入驻</a></dd>
		<dd><a href="#">美食</a></dd>
	</dl>
	<dl class="last">
		<dt>客服在线</dt>
		<dd>4006-600-000</dd>
		<dd><img src="images/QQ.jpg" /></dd>
	</dl>

	<div style="clear:both"></div>
</div>

</div>

<p class="Copy">Copyright © 2013-2015 www.tanzhouedu.com All Rights Reserved 版权所有：湖南潭州教育咨询有限公司 备案号：备13016338号</p>
<!--网站底部结束-->


<!--引用外部jquery文件-->
<script type="text/javascript" src="/Public/cd/js/jquery.js" ></script>
<script type="text/javascript" src="/Public/cd/js/index.js" ></script>


	<script type="text/javascript">

		$("img.prev").click(function(){

			$(".imgList ul").animate({"left":-280},500,function(){
				$(this).append($(this).find("li:first"));
				$(this).css("left",0);
			});

		});

		$("img.next").click(function(){

			autoPlay();

		});

		var cleartime=setInterval(autoPlay,2000);
		//鼠标放上去，停止播入
		$("img.next,img.prev").hover(function(){
			clearInterval(cleartime);
		},function(){
			cleartime=setInterval(autoPlay,3000);
		});

		function autoPlay(){

			$(".imgList ul").prepend($(".imgList ul li:last"));
			$(".imgList ul").css("left",-280);
			$(".imgList ul").animate({"left":0},500);
		}
	</script>

 </body>
</html>