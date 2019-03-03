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

	function show(e){

		$.ajax({
			type:"get",
			url:'http://wthrcdn.etouch.cn/weather_mini?city='+e,
			data:{},
			dataType:'jsonp',
			success:function(e){
				
				$("#ulr").append("<li>"+e.data.forecast[0].date+"\t"+e.data.forecast[0].high+"</li>");
			}
		})
	}

	$("#erl").keyup(function(){
			show($(this).val());

		})
	</script>