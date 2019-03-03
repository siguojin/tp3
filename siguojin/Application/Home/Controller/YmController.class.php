<?php
namespace Home\Controller;
use Think\Controller;
// +----------------------------------------------------------------------
// |控制器名称[页面理的控制器]
// +----------------------------------------------------------------------
// | 时间：2018年10月11日11:42:10
// +----------------------------------------------------------------------
// | Author: Mr.hao
// +----------------------------------------------------------------------
class YmController extends Controller
{

	public function index(){//跳转到商城页面
		$info=M('shop')->select();
		$this->assign('info',$info);

		$infos=M('shop')->where(array('ktd'=>1))->select();
		$this->assign('infos',$infos);

		$info1=M('shop')->where(array('ktd'=>2))->select();
		$this->assign('info1',$info1);

		$info2=M('shop')->where(array('ktd'=>3))->select();
		$this->assign('info2',$info2);




		$this->display();
	}

	public function goods(){
		$info=M('shop')->where(array('shopid'=>I('get.id')))->find();
		$info['image']=explode(',',$info['image']);
		$this->assign('info',$info);
		$this->display();
	}
	//加入购物车的控制器
	public  function bdd(){ 
		$model=D('shop'); 
		$array=I('post.');
		$infos=$model->cdd($array);
		
		if($infos['status']==100){
			echo 1;
		}elseif($infos['status']==101){
			echo 2;
		}else{
			echo 3;
		}

	}

	public function order(){
		$model=D('shop');
		$info=$model->show();
		$this->assign('info',$info);
		$this->display();
	}

}
?>