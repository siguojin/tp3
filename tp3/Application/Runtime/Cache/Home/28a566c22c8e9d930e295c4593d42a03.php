<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<input type="text" list='url_list' id='erl'>
	<input type="button" value='天气' id='btn'>

	<div id="ulr">
 			
		</div>
</body>
<script src="/Public/jquery.js"></script>
<script>
	
	function seach(e){
		$.ajax({
			type:'get',
			data:{},
			url:'http://wthrcdn.etouch.cn/weather_mini?city='+e,
			dataType:'jsonp',
			// jsonp:"_jqjsp",
			success:function(e){
				// $("$ulr").html();
				console.log(e.data);
				// $("#ulr").append("城市:"+e.data.city+"<br>");
				// // var $html="";
				$("#ulr").append("<li>时间:12月"+e.data.yesterday.date+"，最"+e.data.yesterday.high+"，最"+e.data.yesterday.low+"，风力:"+e.data.yesterday.fl+"，风向:"+e.data.yesterday.fx+"</li>");
				for (var i = 0; i < e.data.forecast.length; i++) {
					
					$("#ulr").append("<li>时间:12月"+e.data.forecast[i].date+"，最"+e.data.forecast[i].high+"，最"+e.data.forecast[i].low+"，风力:"+e.data.forecast[i].fengli+"，风向:"+e.data.forecast[i].fengxiang+"</li>");
				}
				$("#ulr").append("温馨提示:"+e.data.ganmao+"<br>");	
			}
		})
	}
	$('#btn').click(function(){
			$("#ulr").html("");
			seach($("#erl").val());
			
		})	
	  
</script>
</html>