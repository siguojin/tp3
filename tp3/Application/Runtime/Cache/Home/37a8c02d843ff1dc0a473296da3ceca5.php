<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="<?php echo U('insert');?>" method="post" enctype="multipart/form-data">
    商品名称：<input type="text" name="name" ><br/>
    商品简介：<input type="text" name="intro" ><br/>
    商品图片：<input type="file" name="image" ><br/>
    商品价格：<input type="text" name="money" ><br/>
    <input type="submit" value="添加" >
</form>
</body>
</html>