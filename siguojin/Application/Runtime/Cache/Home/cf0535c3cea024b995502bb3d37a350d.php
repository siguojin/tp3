<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('add_insert');?>" method="post" enctype="multipart/form-data">
		头像1：<input type="file" name="files[]"><br>
		头像2：<input type="file" name="files[]"><br>
		头像3：<input type="file" name="files[]"><br>
		<span id="erzi">
			
		</span>

		给我上一条：<input type="button" onclick="qw()" value="添加一条">
		<button>提交</button>

	</form>

	
</body>
</html>
<script src="/Public/jquery.js"></script>
<script>
	// $(document).on('click','s#qw',function(){

	// 	var str='<input type="file" name="files[]"><br>';
	// 	$('#eriz').append(str);

	// })
	// 
	function qw(){
		var str='<input type="file" name="files[]"><br>';
		$('#erzi').append(str);


	}


</script>