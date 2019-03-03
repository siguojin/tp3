<?php
namespace Home\Controller;
use Think\Controller;
// +----------------------------------------------------------------------
// |控制器名称[用户管理的控制器]
// +----------------------------------------------------------------------
// | 时间：2018年10月10日9:42:10
// +----------------------------------------------------------------------
// | Author: Mr.hao
// +----------------------------------------------------------------------
class AddController extends Controller
{
	 public function index(){

		    //取得指定位址的内容，并储存至text
		    $text=file_get_contents('http://book.zongheng.com/store/c0/c0/b0/u0/p1/v9/s1/t0/u0/i1/ALL.html');
		    //去除换行及空白字元（序列化内容才需使用）
		    //$text=str_replace(array("r","n","t","s"), '', $text);
		    //取出div且id为PostContent的内容，并储存至阵列match
		    preg_match_all(' #<div class="bookname">\s+<a href=".+?" target="_blank">(.+?)</a>#',$text,$a);
		   preg_match_all('#<div class="bookimg">\s+<a href=".+?" target="_blank">\s+<img src="(.+?)" alt="(.+?)">\s+</a>\s+</div>#',$text,$b);
		    //印出match[0]
			 var_dump($a);
			var_dump($b);


	 }


	 public function add(){
	 	$this->display();
	 }

	 public function bdd(){
	 	$this->display();
	 }


	 public function pdd(){
	 	$this->display();
	 }


	 public function tdd(){
	 	$this->display();

	 }

}
?>

