<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	//利用控制器调用视图
    public function index(){
                // echo md5('123456');die;
    	//可以利用缓存 判断有没有数据  有数据 则调到show方法  无数据 那你就登陆
    	if($_SESSION['userid']){
    		$this->success("老板，您已经登陆过，直接跳到显示页面",U('User/showUser'),5);
    	}else{
    		$this->display('login');
    	}
    }
    //利用控制器接值
    //登陆方法login_pro
    //传值方式：POST
    //参数：phone  手机号   password   密码
    public function login_pro(){
    	//值接收到
    	$info=M("user")->where(array("telphone"=>I('post.phone')))->find();//利用手机号验证表里此数据是否存在
    	if($info){
    		// $info['password']   2.表单接收过来值  需要 加密   判断密码是否一致
    		if($info['password']==md5(I('post.password'))){
    			//密码一致时才可以登陆成功
    			//需要记录是谁登陆的
    			session_start();//开启session
    			$_SESSION['userid']=$info['id'];//给session赋值
    			$status=1;//1 代表登陆成功
    		}else{
    			$status=2;//代表密码不一致
    		}
    	}else{
    		$status=3;//代表没有这个用户请注册
    	}
    	echo $status;//将状态值接收 在页面显示出信息，供ajax接收
    }
    //登陆成功后跳转的方法
    public function show(){
    	print_r($_SESSION);
    }
}