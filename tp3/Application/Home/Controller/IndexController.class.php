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
class IndexController extends Controller
{

	public function index(){
		if(!$_POST){

		$this->display();
	}else{
		$info=M('register')->add(I('post.'));
		if($info){
			$this->success('添加成功',U('cdd'));
		}
	}


	}


	public function cdd(){
		$info=M('register')->select();
		$this->assign('info',$info);
		$this->display();
	}

	public function clcl(){
		$id=$_POST['id'];
		$cd=rtrim($id,',');
		$info=M('register')->delete($cd);
		if($info){
			echo 1;
		}else{
			echo 2;
		}


	}
}
?>