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
class EddController extends Controller
{

	public function add(){
		$this->display();
	}

	public function bdd(){


		$upload = new \Think\Upload();// 实例化上传类
		$upload->maxSize   =     3145728 ;// 设置附件上传大小
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->savePath  =      'Uploads/'; // 设置附件上传目录// 上传文件 
		$info   =   $upload->upload();
		if(!$info) {// 上传错误提示错误信息    
		$this->error($upload->getError());
		}else{// 上传成功 获取上传文件信息   
		 foreach($info as $file){      
		   $files= $file['savepath'].$file['savename'];   
		    }
		}

		    $array=array("user"=>I('post.user'),'psd'=>I('post.psd'),'files'=>$files);

		    $info=M('wq')->add($array);
		    if($info){
		    	$this->success("添加成功",U('cdd'));
		    }
	}


	public function cdd(){
		$User = M('wq'); // 实例化User对象// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
		$list = $User->page($_GET['p'].',2')->select();
		$this->assign('list',$list);// 赋值数据集
		$count      = $User->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数
		$Page ->setConfig('prev','上一页');
		$Page ->setConfig('next','下一页');

		$show       = $Page->show();// 分页显示输出
		$this->assign('page',$show);// 赋值分页输出
		$this->display(); // 输出模板


	}


	public function clcl(){
		$id=$_GET['cd'];
		$array['id|user']=array('LIKE','%'.$id.'%');
		$info=M('wq')->where(array($array))->select();
		$this->assign("list",$info);
		$this->display("cdd");


	}

}
?>