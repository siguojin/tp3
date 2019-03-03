<?php if (!defined('THINK_PATH')) exit();?><meta charset="utf-8">
<input type="text"  value="" id="wd">
<div style='background: #e1e1e1;width:220px;display:none;' id="rs">
    <ul>
 
    </ul>
</div>
<script src="/Public/jque"></script>
<script>
    $(function(){
        $("#wd").keyup(function(){
            var word=$(this).val();
            $.ajax({
                url:'http://suggestion.baidu.com/su?wd='+word+'&cb=showli',
                dataType:'jsonp',
                jsonpCallback:'showli',
                success:function(txt){
                    var arr=txt.s;
                    var li="";
                    $.each(arr,function(i,val){
                        li+="<li>"+val+"</li> ";
                    });
                    $("#rs ul").html(li);
                    $("#rs").slideDown('fast');
                    //鼠标经过元素的背景颜色改变
                    $("#rs ul li").bind('mouseenter',function(){$(this).css({'background':'yellow'})});
                    $("#rs ul li").bind('mouseleave',function(){$(this).css({'background':'#e1e1e1'})});
                    $("#rs ul li").bind('click',function(){
                        $("#wd").val($(this).html());
                        $("#rs").slideUp('fast');
                    });
            }})
    })
    })

</script>