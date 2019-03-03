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
class EddController extends Controller
{
	public  function add(){#添加接口
		if(!$_POST){
			$this->display();
		}else{
			$info=M('add')->add(I('post.'));
			if($info){
				echo 1;
			}else{
				echo 2;
			}

		}
	}

	public function bdd(){
		$this->display();
	}

	public function cdd(){
		$info=M('add')->select();
		print_r(json_encode($info));
	}

}


?>