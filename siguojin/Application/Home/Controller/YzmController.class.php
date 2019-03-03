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
class YzmController extends Controller
{

	public function showCode(){
		$config =    array(    'fontSize'    =>    30,    // 验证码字体大小    
		'length'      =>    3,     // 验证码位数    
		'useNoise'    =>    false, // 关闭验证码杂点
		);
		$Verify = new \Think\Verify($config);//实例化对象
		$Verify->entry();//对象访问方法
		//不同的编辑器如何快速找到里边对应的方法
		//1.Phpstorm   ctrl+alt+鼠标
 		//2.netbeans    ctrl+鼠标

	}


	public function add(){
		$this->display();

	}
	//写一个方法接受ajax穿过来的数据
	public function demos(){
		$code=$this->check_verify(I('post.code'));
		if(!$code){
			echo 1;die;//验证码不正确
		}
		$array=array('users'=>I("post.users"),'psd'=>I('post.psds'));
		$info=M('yzm')->add($array);
		if($info){
			$this->success('增加成功',U('bdd'),2);
		}else{
			$this->error("增加失败");
		}
	}

	function check_verify($code, $id = ''){
	    $verify = new \Think\Verify();
	    return $verify->check($code, $id);
	}

}

?>