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
class CddController extends Controller{


	public function add(){
		$this->display();
	}

	public function bdd(){
		$user=I('post.user');
		if(!$user){
			$return=[
				'code'=>1,
				'mas'=>"用户不能为空"
			];
		}
		$psd=I('post.psd');
		if(!$psd){
			$return=[
				'code'=>2,
				'mas'=>"密码不能为空"
			];
		}
		$info=M('add')->where(array("user"=>$user,'psd'=>$psd))->find();
		if($user==$info['user']){
			$return=[
				'code'=>3,
				'mas'=>'用户存在，请继续'
			];
		}else{
			$return=[
				'code'=>4,
				'mas'=>'用户不存在，请去注册'
			];
		}

		if($psd==$info['psd']){
			$return=[
				'code'=>5,
				'mas'=>'登录成功'
			];
		}else{
			$return=[
				'code'=>6,
				'mas'=>'密码不正确'
			];
		}

		print_r(json_encode($return));
	}

	public function cdd(){
		$this->display();
	}

	public function edd(){
		$info=M('add')->select();
		return $this->AjaxReturn($info,'JSON');

	}

	public function cl(){
		$id=I("get.id");
		$info=M('add')->delete($id);
		if($info){
			$return=[
				'code'=>1,
				'mas'=>'删除成功'
			];
		}else{
			$return=[
				'code'=>2,
				'mas'=>'删除失败'
			];
		}
		print_r(json_encode($return));
	}


	public function clcl(){
		$id=I('post.id');
		$cd=rtrim($id,',');
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
}
?>