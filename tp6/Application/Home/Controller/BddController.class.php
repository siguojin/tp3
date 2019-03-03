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
class bddController extends Controller
{

	public function add(){
		$this->display();
	}

	public function bdd(){
		$user=I("post.user");
		if(!$user){
			$return=[
				'code'=>3,
				'mag'=>'账号不能为空'
			];die;
		}      
		 $psd=I("post.psd");
		 if(!$psd){
			$return=[
				'code'=>4,
				'mag'=>'密码不能为空'
			];die;
		}     
		$info=M('add')->where(array("user"=>$user,'psd'=>$psd))->find();
		if($user==$info['user']){
			$return=[
				'code'=>1,
				'mag'=>'账号成功'
			];
		}else{
			$return=[
				'code'=>2,
				'mag'=>'账号不存在，请重新登录'
			];
		}
		if($psd==$info['psd']){
			$return=[
				'code'=>5,
				'mag'=>'登录成功'
			];
		}else{
			$return=[
				'code'=>6,
				'mag'=>'密码错误或账号错误，请重新输入'
			];
		}
		return  $this->AjaxReturn($return,'JSON');
	}

	public function cdd(){
		return $this->display();
	}

	public function edd(){
		$info=M('add')->select();
		return  $this->AjaxReturn($info,'JSON');
	}

	public function cl(){
		$cd=I('post.id');
		$info=M('add')->delete($cd);
		if($info){
			$return=[
				'code'=>1,
				'mag'=>'删除成功'
			];
		}else{
			$return=[
				'code'=>1,
				'mag'=>'删除失败'
			];
		}

		print_r(json_encode($return));
	}

	public function clcl(){
		$cd=I('post.id');
		$id=rtrim($cd,',');
		$info=M('add')->delete($id);
		if($info){
			echo 1;
		}else{
			echo 2;
		}
	}

}
?>