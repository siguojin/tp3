<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<script src="/Public/jquery.js"></script>
<script>

	function suggest_so(e){
		for(var i=0;i<e.result.length;i++){
			$('#qw').append('<li>'+e.result[i].word+'</li>')
		}
	}
	
	$(function(){		
	

	$('#cd').keyup(function(){
       		 $('#qw').html('');
  		cdd($(this).val());
  	})

		function cdd(e){
			$.ajax({
				type:'GET',
				url:'https://sug.so.360.cn/suggest?callback=suggest_so&encodein=utf-8&encodeout=utf-8&format=json&fields=word&word='+e,
				data:{},
				dataType:'jsonp',
				jsonp:'callbackparam',
				jsonpCallback:" suggest_so",
				success:function(e){
				}
			})
		}
	})
</script>
<body>
	<input type="text" id="cd">
	<ul id="qw">
		<li></li>
	</ul>

	
</body>
</html>