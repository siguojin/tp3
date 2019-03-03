<?php
namespace Home\Controller;
use Think\Controller;
// +----------------------------------------------------------------------
// |控制器名称[增删改查管理的控制器]
// +----------------------------------------------------------------------
// | 时间：2018年10月10日9:42:10
// +----------------------------------------------------------------------
// | Author: Mr.hao
// +----------------------------------------------------------------------
class CdsController extends Controller
{
	public function add(){
		if(!$_POST){
			$this->display();
		}else{
			$upload = new \Think\Upload();// 实例化上传类
			$upload->maxSize   =     3145728 ;// 设置附件上传大小
			$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录// 上传文件
			$info   =   $upload->upload();
			if(!$info) {// 上传错误提示错误信息
			$this->error($upload->getError());
		}else{// 上传成功 获取上传文件信息    
			foreach($info as $file){      
			  $image[]= $file['savepath'].$file['savename']; 
			}}
			$images=implode(',',$image);
			$array=array('user'=>I('post.user'),'psd'=>I('post.psd'),'files'=>$images);
			$info=M('cds')->add($array);
			if($info){
				$this->success('添加成功',U('bdd'),1);
			}else{
				$this->error('添加失败');
			}

		}
	}


	public function bdd(){
		$User = M('cds'); // 实例化User对象// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
		$info = $User->page($_GET['p'].',3')->select();
		foreach ($info as $k => $v) {
			$info[$k]['files']=explode(',', $v['files']);
		}
		
		$this->assign('info',$info);// 赋值数据集
		$count      = $User->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,1);// 实例化分页类 传入总记录数和每页显示的记录数
		$show       = $Page->show();// 分页显示输出
		$this->assign('page',$show);// 赋值分页输出
		$this->display(); // 输出模板

	}

	public function cdd(){
		$id=I('post.id');
		$new_id=rtrim($id,',');
		$info=M('cds')->delete($new_id);
		if($info){
			echo 1;
		}else{
			echo 2;
		}
		

	}

	public function delete(){
		$info=M("cds")->where(array('id'=>I('get.id')))->delete();
		if($info){
			$this->success('删除成功',U('bdd'),1);
		}else{
			$this->error('删除失败');
		}
	}

	public function update(){
		$info=M("cds")->where(array('id'=>I('get.id')))->find();
		$this->assign('info',$info);
		$this->display();

	}

	public function upload(){
		$array=array('user'=>I('post.user'),'psd'=>I('post.psd'));
		$info=M('cds')->where(array('id'=>I('post.id')))->save($array);
		if($info){
			$this->success("修改成功",U('bdd'),1);
		}else{
			$this->error('修改失败');
		}

	}

}



?>
