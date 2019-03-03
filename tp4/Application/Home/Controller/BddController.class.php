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
class bddController extends Controller{

	public function add(){
		$this->display();
	}


	public function bdd(){
		
		$info=M('jk')->add(I('POST.'));
		if($info){
			echo 1;
		}else{
			echo 2;
		}
	}

	public function cdd(){
		$info=M('jk')->select();
		print_r( json_encode($info));
	}

	public function wdd(){
		$this->display();
	}
}
?>