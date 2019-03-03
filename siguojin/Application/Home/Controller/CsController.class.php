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
class CsController extends Controller
{

	public function bdd(){
		
			

			if(!$_POST){
				$this->display();
			}else{
			$upload = new \Think\Upload();// 实例化上传类
			$upload->maxSize   =     3145728 ;// 设置附件上传大小
			$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->savePath  =      '/Uploads/'; // 设置附件上传目录// 上传文件
			$info   =   $upload->upload();
			if(!$info) {// 上传错误提示错误信息  
			 
			  }else{// 上传成功 获取上传文件信息    
			 foreach($info as $file){        
			 $files= $file['savepath'].$file['savename'];  
			   }}
			$array=array('user'=>I('post.user'),'files'=>$files);
			$info=M('cs')->add($array);
			if($info){
				$this->success('添加成功',U('cdd'),1);
			}else{
				$this->error("添加失败");
			}
			}

	}


	public function cdd(){
		$User = M('cs'); // 实例化User对象// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
		$list = $User->page($_GET['p'].',1')->select();
		$this->assign('list',$list);// 赋值数据集
		$count      = $User->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,1);// 实例化分页类 传入总记录数和每页显示的记录数
		$Page->setConfig('prev','上一页');
		$Page->setConfig('next','下一页');
		$show       = $Page->show();// 分页显示输出
		$this->assign('page',$show);// 赋值分页输出
		$this->display('bdd'); // 输出模板

	}

	public function delete(){
		$info=M('cs')->where(array('id'=>I('get.id')))->delete();
		if($info){
			$this->success('删除成功',U('cdd'),1);
		}else{
			$this->error('删除失败');
		}
	}

	public function edd(){
		if(!$_POST){
			$User = M('cs1'); // 实例化User对象// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
		$list = $User ->page($_GET['p'].',1')->select();

		foreach ($list as $k => $v) {
			$list[$k]['files']=explode(',',$v['files']);
			if($v['ad']==1){
				$list[$k]['ads']='上架';
			}else{
				$list[$k]['ads']='下架';
			}
		}
		

		$this->assign('list',$list);// 赋值数据集
		$count      = $User->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,1);// 实例化分页类 传入总记录数和每页显示的记录数
		$Page->setConfig('prev','上一页');
		$Page->setConfig('next','下一页');
		$show       = $Page->show();// 分页显示输出
		$this->assign('page',$show);// 赋值分页输出

		$infos=M('cs')->join("jy_cs1 on jy_cs.id=jy_cs1.cid")->select();#下拉框
		$this->assign('infos',$infos);

	


		$this->display();

		}else{

			$upload = new \Think\Upload();// 实例化上传类
			$upload->maxSize   =     3145728 ;// 设置附件上传大小
			$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->savePath  =      '/Uploads/'; // 设置附件上传目录// 上传文件
			$info   =   $upload->upload();
			if(!$info) {// 上传错误提示错误信息  
			 
			  }else{// 上传成功 获取上传文件信息    
			 foreach($info as $file){        
			 $files[]= $file['savepath'].$file['savename'];  
			   }}

			   $new_files=implode(',',$files);

			$array=array('user'=>I('post.user'),'csd'=>I('post.csd'),'files'=>$new_files,'phon'=>I('post.phon'),'ad'=>I('post.ad'));

			$info=M('cs1')->add($array);
			if($info){
				$this->success('添加成功',U('edd'),1);
			}else{
				$this->error('添加失败');
			}

		}

	}
	

	public function dele(){
		$id=I('post.id');

		$new_id=rtrim($id,',');
		$info=M('cs1')->delete($new_id);
		if($info){
			echo 1;
		}else{
			echo 1;
		}

	}

	public function deletes(){
		$info=M('cs1')->where(array('cid'=>I('get.id')))->delete();
		if($info){
			$this->success('删除成功',U('edd'),1);
		}else{
			$this->error('删除失败');
		}
	}

	public function update(){
		$info=M('cs1')->where(array('cid'=>I('get.id')))->find();
		$this->assign('info',$info);
		$this->display();
	}

	public function upload(){
		$upload = new \Think\Upload();// 实例化上传类
			$upload->maxSize   =     3145728 ;// 设置附件上传大小
			$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->savePath  =      '/Uploads/'; // 设置附件上传目录// 上传文件
			$info   =   $upload->upload();
			if(!$info) {// 上传错误提示错误信息  
			 
			  }else{// 上传成功 获取上传文件信息    
			 foreach($info as $file){        
			 $files= $file['savepath'].$file['savename'];  
			   }}
			$array=array('user'=>I('post.user'),'files'=>$files,'csd'=>I('post.csd'),'phon'=>I('post.phon'));
			$info=M('cs1')->where(array('cid'=>I('post.id')))->save($array);
			if($info){
				$this->success('修改成功',U('edd'),2);
			}else{
				$this->error('修改失败');
			}

	}


	public function sdd(){
		$infoa=M('diqu')->where(array('pid'=>0))->select();#三级联动
		$this->assign('infoa',$infoa);
		$this->display('edd');
	}

	public function fdd(){
		$id=I('post.sid');
		$q=I('post.qd');
		$str=" ";	
		if($q==0){
			$str.="<option value='请输入市''>请输入市</option>";
		}else{
			$str.="<option value='请输入县''>请输入县</option>";
		}
		$info=M('diqu')->where(array('pid'=>$id))->select();
		
		foreach ($info as $k => $v) {
			$str.="<option value='$v[id]'>$v[users]</option>";
		}
		echo $str;
	}
	


	public function save(){
		$array['phon']=I('post.name');
		$info=M('cs1')->where(array('cid'=>I('post.id')))->save($array);
		if($info){
			echo 1;
		}else{
			echo 2;
		}
	}


}

?>

