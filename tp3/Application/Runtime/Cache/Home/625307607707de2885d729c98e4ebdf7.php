<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<input type="text" id="cd">
	<ul id="qw">
		
	</ul>
</body>
</html>
	<script src="/Public/jquery.js"></script>
	<script>
	function jQuery1102005888964346918013_1544358109158(e){
		$("#qw").append('<li>'+e.s+'</li>');
	}
		function show(e){ 
			$.ajax({
			type:'get',
			url:'https://sp0.baidu.com/5a1Fazu8AA54nxGko9WTAnF6hhy/su?wd='+e+'&json=1&p=3&sid=1454_27214_21116_28018_22072&req=2&csor=1&cb=jQuery1102005888964346918013_1544358109158&_=1544358109162',
			dataType:'jsonp',
			jsonp:'jQuery1102005888964346918013_1544358109158',
			success:function(e){
				
			}

			})

		}

		$("#cd").keyup(function(){
			show($(this).val());r
		})
	</script>