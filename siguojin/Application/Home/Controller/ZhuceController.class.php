<?php
namespace Home\Controller;
use Think\Controller;
// +----------------------------------------------------------------------
// |控制器名称[注册管理的控制器]
// +----------------------------------------------------------------------
// | 时间：2018年10月15日9:42:10
// +----------------------------------------------------------------------
// | Author: Mr.hao
// +----------------------------------------------------------------------
class ZhuceController extends Controller
{
	public function add(){
		if(!$_POST){
			$this->display();
		}else{
			header('content-type:text/html;charset=UTF-8');
			$array=I('post.');
			$model=D('zhuce');
			$infos=$model->insert($array);
			if($infos['status']==1){
				$this->success($infos['info'],U('login'));
			}else{
				$this->error($infos['info']);
			}


		}
	}

	public function code(){
		$Verify =     new \Think\Verify();// 设置验证码字符为纯数字
		$Verify->codeSet = '8012';
		 $Verify->entry();
	}

	public function login(){
			header('content-type:text/html;charset=UTF-8');
		if(!$_POST){
			$this->display();
		}else{
			
			$model=D('zhuce');
			$array=I('post.');
			$info=$model->login($array);
			if($info['status']==1){
				$this->success($info['info'],U('Ym/index'));
			}else{
				$this->error($info['info']);
			}
		}
	}

	


}