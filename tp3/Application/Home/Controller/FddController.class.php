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
class FddController extends Controller
{

	public function add(){#渲染自己封装的接口，
		header("content-type:text/html;charset=UTF-8");
		$array[]=array("id"=>'1','name'=>'siguojin1','sex'=>'男','addr'=>'太原');
		$array[]=array("id"=>'2','name'=>'siguojin2','sex'=>'男','addr'=>'太原');
		$array[]=array("id"=>'3','name'=>'siguojin3','sex'=>'男','addr'=>'太原');
		$array[]=array("id"=>'4','name'=>'siguojin4','sex'=>'男','addr'=>'太原');
		print_r( json_encode($array));
	}

	public function bdd(){
		header("content-type:text/html;charset=UTF-8");
		$this->display();
	}

	public function edd(){#渲染每秒的请求刷新
		$date=date('Y-m-d H:i:s');
		echo $date;
	}

	public function pdd(){
		$this->display();
	}

	public function wq(){
		$this->display();
	}

}
?>