<?php
namespace Home\Controller;
use Think\Controller;
// +----------------------------------------------------------------------
// |控制器名称[用户管理的控制器]
// +------------------------------------------------------------
// | 时间：2018年10月10日9:42:10
// +----------------------------------------------------------------------
// | Author: Mr.hao
// +----------------------------------------------------------------------
class AddController extends Controller{

	public function add(){
		
			$info=M('qq')->select();
			$this->assign('list',$info);
			$this->display();
		

	}


	public function bdd(){
		$date=date("Y-m-d H:i:s");
			$array=array('fen'=>I('post.fen'),'ming'=>I('post.ming'),'shu'=>I('post.shu'),'bz'=>I('post.bz'),'date'=>$date);
			$info=M('qq')->add($array);
			if($info){
				echo 1;
			}else{
				echo 2;
			}
	}


}
?>