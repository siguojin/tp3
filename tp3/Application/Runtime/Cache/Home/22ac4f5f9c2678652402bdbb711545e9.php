<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<style type="text/css">
   div{width: 300px;height: 300px;background: #0d0d0d}
</style>
<div id="id">


</div>
</body>
</html>
<script src="/Public/js/jquery.js"></script>
<script>
    $("#id").mouseenter(function () {
        $(this).css({"background": "green"});
    });


    $("#id").mouseleave(function () {
        $(this).css({"background": "yellow"});
    });
</script>