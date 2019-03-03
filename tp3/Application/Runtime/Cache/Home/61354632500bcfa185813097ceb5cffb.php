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
	
			
	function show(a){
		$.ajax({
			type:'get',
			data:{},
			url:'http://wthrcdn.etouch.cn/weather_mini?city='+a,
			dataType:'jsonp',
			// jsonp:"_jqjsp",
			success:function(e){
				// console.log(e.data);s
				$("#ulr").append("<li>"+e.data.city+"</li>");
				// for(var i=0;i<e.data.forecast.length;i++){
					$("#ulr").append("<li>"+e.data.forecast[0].date+"\t"+e.data.forecast[0].high+"</li>");
					
					// console.log(e.data.forecast[i].high);
					// console.log(e.data.forecast[i].low);
				// }

			}
		})
	}

	$("#erl").keyup(function(){
		show($(this).val());

	})

	</script>