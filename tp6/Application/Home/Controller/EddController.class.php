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
class EddController extends Controller{

	// public function _initialize(){
	//         parent::_initialize();
	//     }

	public function login(){

		$this->display();
	}

	public function add(){
		$user=I('post.user');#接过来的账号
		if(!$user){#判断账号
			$return=[
				'code'=>1,
				'mag'=>'用户不能为空'
			];die;
		}
		$psd=I('post.psd');#判断密码
		if(!$psd){
			$return=[
				'code'=>2,
				'mag'=>'密码不能为空'
			];die;
		
		}

		$info=M("add")->where(array('user'=>$user,'psd'=>$psd))->find();#查询他的账号密码
		if($user==$info['user']){#判断库里跟穿过的账号是否一致
			$return=[
				'code'=>3,
				'mag'=>'账号输入正确'
			];
		}else{
			$return=[
				'code'=>4,
				'mag'=>'您的输入有误，请您重新输入'
			];
		}

		if($psd==$info['psd']){#判断库里跟穿过的密码是否一致
			$return=[
				'code'=>5,
				'mag'=>'登陆成功'
			];
		}else{
			$return=[
				'code'=>6,
				'mag'=>'您的账号或密码有错'
			];
		}

		print_r(json_encode($return));#返回json格式

	}

	public function index(){#渲染页面
		$this->display();
	}

	public function bdd(){#渲染方法
		$info=M('add')->select();
		return $this->AjaxReturn($info,'JSON');
	}
}
?>