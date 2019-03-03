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
class SlController extends Controller
{

	public function bdd(){
		$array=array('id'=>'1','user'=>'司国进','ho'=>'cces1236');
		$array=array('id'=>'2','user'=>'李江飞','ho'=>'cces1236');
		$array=array('id'=>'3','user'=>'白文博','ho'=>'cces1236');
		$array=array('id'=>'4','user'=>'李宁旭','ho'=>'cces1236');
		$array=array('id'=>'5','user'=>'郑涛','ho'=>'cces1236');
		echo $array;
	}

	public function add(){
		$this->display();
	}

	public function cdd(){
		$info=M('wq')->add(I("post."));
		if($info){
			echo 1;
		}else{
			echo 2;
		}
	}

}
?>