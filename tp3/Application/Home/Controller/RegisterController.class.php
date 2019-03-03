<?php
namespace Home\Controller;
use Think\Controller;
// +----------------------------------------------------------------------
// |控制器名称[美团的注册]
// +----------------------------------------------------------------------
// | 时间：2018年11月128日9:01:10
// +----------------------------------------------------------------------
// | Author: Mr.siguojin
// +----------------------------------------------------------------------
class RegisterController extends Controller
{
//注册
	public function register(){
		if(!$_POST){
			$info=M('photo')->find();
			$this->assign('info',$info);
			$this->display();
		}else{
			$code=$this->check_verify(I('post.code'));
			if(!$code){
				$this->error('验证码错误');
			}
			else{
				$infos = M('Register')->where(array('user'=>I('post.user')))->find();
				if($infos['user']==I('post.user')){
				echo 3;
				}
				else{
				$array=array('user'=>I('post.user'),'psd'=>md5(I('post.psd')),'status'=>0);
				$info=M('Register')->add($array);
				if($info){
					echo 1;
				}else{
					echo 2;
				}

				}
				
			}
			
	}
}
//验证码
	public function code(){
		$Verify = new \Think\Verify();
		$Verify->codeSet = '8012'; 
		$Verify->entry();
	}

//验证码验证
	function check_verify($code, $id = ''){    #验证码
		$verify = new \Think\Verify();    
		return $verify->check($code, $id);

	}
	

	public function photo(){#上传头像
			$this->display();

	}
	public function photos(){#上传注册头像
			$upload = new \Think\Upload();// 实例化上传类
			$upload->maxSize   =     3145728 ;// 设置附件上传大小
			$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->savePath  =      '/Uploads/'; // 设置附件上传目录// 上传文件 
			$info   =   $upload->upload();
			if(!$info) {// 上传错误提示错误信息 
			   $this->error($upload->getError());}
			   else{// 上传成功 获取上传文件信息    
			   	foreach($info as $file){       
			   	 $files= $file['savepath'].$file['savename'];    
			   }}

			   $array=array("file"=>$files);
			   $info=M('photo')->add($array);
			   if($info){
			   	$this->success("添加图片能成功",U('register'));
			   }else{
			   	$this->error('添加图片失败');
			   }
	}

	//登录
	public function login(){
		$this->display();
	}
	public function pan(){
	$infos = M('Register')->where(array('user'=>I('post.user')))->find();
	$pass = md5(I('post.psd'));
	if($infos['user']!=I('post.user')){
	$this->error('此用户不存在');
	}
	else{
		if($pass!=$infos['psd']){
		$this->error('密码错误');
		}
		else{
			$this->success('登录成功',U('index'));
		}
	}

	}


	public function index(){#首页
		$info=M('add')->select();#渲染；两边
		$this->assign('info',$info);

		$infos=M('bdd')->select();#渲染轮播
		$this->assign('list',$infos);

		$this->display();
	}


	public function Product(){
		$this->display();
	}



	public function add(){#添加两侧
		if(!$_POST){
			$info=M('add')->select();
			$this->assign('info',$info);
			$this->display();
		}else{
			$info=M('add')->add(I('post.'));
			if($info){
				$this->success('添加成功',U('index'));
			}else{
				$this->error('添加失败');
			}
		}
	}

	public function bdd(){#轮播添加
		$this->display();

	}

	public function bdds(){
		$upload = new \Think\Upload();// 实例化上传类
		$upload->maxSize   =     3145728 ;// 设置附件上传大小
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->savePath  =      '/Uploads/'; // 设置附件上传目录// 上传文件 
		$info   =   $upload->upload();
		if(!$info) {// 上传错误提示错误信息    
		$this->error($upload->getError());
	}
		else{// 上传成功 获取上传文件信息    
			foreach($info as $file){        
				$files= $file['savepath'].$file['savename'];    
	}}
	$array=array('file'=>$files);
	$info=M('bdd')->add($array);
	if($info){
		$this->success('添加成功',U('index'));
	}else{
		$this->error('添加失败');
	}
	}


}
?>
