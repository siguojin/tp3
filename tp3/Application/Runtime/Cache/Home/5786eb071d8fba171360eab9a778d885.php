<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>


</html>
<script src="/Public/jquery.js"></script>
<script>

    function _jqjsp(e) {
        $.each(e.data,function (k,v) {
            $('#content').append('<tr><td>'+v.time+'</td><td>'+v.context+'</td></tr>')
        })

    }


    function wdd(e) {


        $.ajax({ 
            url:'https://biz.trace.ickd.cn/zhongtong/'+e+'?mailNo='+e+'&spellName=&exp-textName=&tk=28f3b48b&tm=1544150038046&callback=_jqjsp&_1544150038048=',
            type:'get',
            dataType:'jsonp',
            jsonp:'_jqjsp',
            success:function (e) {
            }
        })
    }

    $(function () {
        $('#wdd').keyup(function (e) {
            if(e.keyCode==13){
                wdd($(this).val());
            }
        })

    })


</script>
<body>
<input type="text" id="wdd" >
<table border="1" cellspacing="0" cellpadding="10" id="content">
    <tr>
        
    </tr>
</table>
</body>