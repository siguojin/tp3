<?php
namespace Home\Controller;
use Think\Controller;
// +----------------------------------------------------------------------
// |控制器名称[验证器的控制器]
// +----------------------------------------------------------------------
// | 时间：2018年10月11日7:49:10
// +----------------------------------------------------------------------
// | Author: Mr.hao
// +----------------------------------------------------------------------
class DiquController extends Controller
{

	public function demo(){

		$info=M('diqu')->where(array('pid'=>0))->select();
		print_r($info);die;
		$this->assign('info',$info);
		$this->display();
	}

	#定义一个方法
	public  function bdd(){  #市
		$info=M('diqu')->where(array('pid'=>I('post.sid')))->select();
		$str=' ';
		foreach ($info as $key => $v) {
			$str.="<option value='$v[id]'>$v[users]</option>";
		}
		echo $str;


	}

	public  function cdd(){ #县
		$info=M('diqu')->where(array('pid'=>I('post.sid')))->select();
		$str=' ';
		foreach ($info as $key => $v) {
			$str.="<option value='$v[id]'>$v[users]</option>";
		}
		echo $str;


	}




}
?>