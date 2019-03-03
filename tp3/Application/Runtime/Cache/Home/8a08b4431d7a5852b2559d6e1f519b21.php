<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('quanxian');?>" method="post">
		    <tr>
		             <td>权限</td>
		            <select name="pid" id="">
		            <option value="权限">权限</option>
		                    <?php if(is_array($info)): foreach($info as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>">
		                              <?php echo str_repeat('|-',$vo['level'])?>
		                              <?php echo ($vo["user"]); ?></option><?php endforeach; endif; ?>
		            </select><br />
		            添加权限：<input type="text" name="user" /><br />
		            <button>提交</button>
		    </tr>   
    </form>
</body>
</html>