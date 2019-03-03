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
class JkController extends Controller{

	public function add(){
		$this->display();
	}

	public function bdd(){
		$array=array('user'=>I('post.user'),'sex'=>I('post.sex'));
		$info=M('add')->add();


	}

	public function edd(){

		$info=M('fdd')->select();
		print_r(json_encode($info));


		// $this->display();
	}

	public function cdd(){
		$this->display();
	}

}
?>