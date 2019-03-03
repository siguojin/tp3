<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<form action="<?php echo U('zj');?>" method="post">
	<input type="hidden" name="id" value="<?php echo ($id); ?>">
	<?php if(is_array($info)): foreach($info as $key=>$v): ?><input type="checkbox" name="pname[]" size="40"  value="<?php echo ($v["qid"]); ?>"/><?php echo ($v["pname"]); ?>&nbsp;&nbsp;<?php endforeach; endif; ?>
       <button>提交</button>
</form>
</body>
</html>