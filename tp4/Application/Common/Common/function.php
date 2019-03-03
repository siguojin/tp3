<?php
/**
 * TODO 基础分页的相同代码封装，使前台的代码更少
 * @param $count 要分页的总记录数
 * @param int $Pagesize 每页查询条数
 * @return \Think\Page
 */
function getPage($count, $Pagesize = 10) {
    $Page = new Think\Page($count, $Pagesize);
    $Page->setConfig('header', '<li class="rows">共<b>%TOTAL_ROW%</b>条记录 第<b>%NOW_Page%</b>页/共<b>%TOTAL_Page%</b>页</li>');
    $Page->setConfig('prev', '上一页');
    $Page->setConfig('next', '下一页');
    $Page->setConfig('last', '末页');
    $Page->setConfig('first', '首页');
    $Page->setConfig('theme', '%FIRST%%UP_Page%%LINK_Page%%DOWN_Page%%END%%HEADER%');
    $Page->lastSuffix = false;//最后一页不显示为总页数
    return $Page;
}
?>