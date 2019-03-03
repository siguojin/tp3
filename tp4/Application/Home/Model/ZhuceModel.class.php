<?php
namespace Home\Model;
use Think\Model;
// +----------------------------------------------------------------------
// |模型名称[注册管理的控制器]
// +----------------------------------------------------------------------
// | 时间：2018年10月15日9:42:10
// +----------------------------------------------------------------------
// | Author: Mr.hao
// +----------------------------------------------------------------------
class ZhuceModel extends Model {

	public function insert($array){
		$code=$this->check_verify($array['code']);
		if(!$code){
			$data['info']="验证码有误";
			$data['status']="2";
			return $data;
		}
		#检测手机号是否唯一
		$telpone=M('zhuce')->where(array('phone'=>$array['phone']))->find();
		if($telpone){
			$data['info']="手机号已被注册";
			$data['status']='3';
			return $data;
		}

		#检测，密码是否一致
		if($array['pwd']!=$array['repwd']){
			$data['info']="两次密码不一致";
			$data['status']='4';
			return $data;
		}
		$array['user']=$array['user'];//用户
		$array['pwd']=md5($array['pwd']);#密码
		$array['email']=$array['email'];#邮箱
		$array['phone']=$array['phone'];#手机号
		$array['status']=1;#状态
		$info=M('zhuce')->add($array);
		if($info){
			$data['info']="注册成功";
			$data['status']='1';
			return $data;
		}else{
			$data['info']="注册失败";
			$data['status']='7';
			return $data;
		}

	}

	//登录
	public function login($array){
		$code=$this->check_verify($array['code']);
		if(!$code){//验证验证码
			$data['info']="验证码错误";
			$data['status']='2';
			return $data;
		}
		#检测有没有这个用户，手机号
		
		$info=M('zhuce')->where(array('phone'=>$array['user']))->find();
		if($info['number']==0){
			$data['info']="账号一般定";
			$data['status']='13';
			return $data;
		}
		
		if(!$info){
			$data['info']="没有此用户，请重新输入";
			$data['status']='3';
			return $data;
		}else{#验证密码
			if($info['pwd']==md5($array['pwd'])){
				session_start();
				$save['number']=3;
				$_SESSION['id']=$info['id'];
				$data['info']="登录成功";
				$data['status']='1';
				return $data;
			}else{
				$saves['number']=$info['number']-1;
				$dara=M('zhuce')->where(array('phone'=>$array['user']))->save($saves);
				$data['info']="密码不一致您还有".$save['number'].'次机会';
				$data['status']='101';
				return $data;
			}
			return $data;
		}





	}




	#检测验证码是否存在，上面调用
	public	function check_verify($code, $id = ''){   
	 $verify = new \Think\Verify();    
	 return $verify->check($code, $id);
	}

}