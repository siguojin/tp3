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
class CssController extends Controller{

	public function cdd(){
		if(!$_POST){
		$info=M('diqu')->where(array('pid'=>0))->select();
		$this->assign('info',$info);
		$this->display();

		}else{
			header("content-type:text/html;charset=UTF-8");
			$upload = new \Think\Upload();// 实例化上传类
			$upload->maxSize   =     3145728 ;// 设置附件上传大小
			$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录// 上传文件 
			$info   =   $upload->upload();
			if(!$info) {// 上传错误提示错误信息    
			$this->error($upload->getError());
			}else{// 上传成功 获取上传文件信息
			foreach($info as $file){
		        $iamge[]= $file['savepath'].$file['savename'];  

		        $d=M('diqu')->where(array('id'=>I('post.sheng')))->getField('users');
		        $b=M('diqu')->where(array('id'=>I('post.shi')))->getField('users');
		        $c=M('diqu')->where(array('id'=>I('post.xian')))->getField('users');
		        $m=$d.$b.$c;
		          }}
		          $c=implode(',', $iamge);
		          $d=implode(',',I('post.user'));
		          $f=implode(',',I('post.psd'));
		          $g=implode(',',I('post.status'));

		          $array=array('user'=>$d,'psd'=>$f,'files'=>$c,'status'=>$g,'users'=>$m);
		          $info=M('cds')->add($array);
		          if($info){
		          	$this->success('添加成功',U('bbd'),1);
		          }else{
		          	$this->error('添加失败');
		          }


		}
	}

	public function bbd(){
		$User = M('cds'); // 实例化User对象// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
		$list = $User->page($_GET['p'].',1')->select();
		foreach ($list as $k => $v) {
			$list[$k]['files']=explode(',',$v['files']);
			$list[$k]['status']=$v['status'];

		}

		$this->assign('list',$list);// 赋值数据集
		$count      = $User->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,1);// 实例化分页类 传入总记录数和每页显示的记录数
		$show       = $Page->show();// 分页显示输出
		$this->assign('page',$show);// 赋值分页输出
		$this->display(); // 输出模板

	}


	public function sehng(){


		$info=M('diqu')->where(array('pid'=>I('post.sid')))->select();
		$str=$_POST['status'];
		if($_POST['status']){
			$str='<option>请输入您的市</option>';
		}else{
			$str='<option >请输入您的县</option>';
		}
		foreach ($info as $k => $vo) {
			$str.="<option value='$vo[id]'>$vo[users]</option>";
		}
		echo $str;

	}


	public function shang(){
		header("content-type:text/html;charset=UTF-8");
		if($_GET['status']==1){
			$q=2;
		}else{
			$q=1;
		}

		$info=M('cds')->where(array('id'=>I('get.id')))->save(array('status'=>$q));
		if($info){
			$this->success('修改成功');
		}else{
			$this->error('修改失败');
		}
	}


	public function delete(){
		$info=M('cds')->where(array('id'=>I('get.id')))->delete();
		if($info){
			$this->success('删除成功',U('bbd'),1);
		}else{
			$this->error('删除是失败');
		}
	}

	public function update(){#修改
		$info=M('cds')->where(array('id'=>I('get.id')))->find();
		$this->assign('info',$info);
		$this->display();

	}
	public function upload(){
		header("content-type:text/html;charset=UTF-8");
		$upload = new \Think\Upload();// 实例化上传类
		$upload->maxSize   =     3145728 ;// 设置附件上传大小
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->savePath  =      '/Uploads/'; // 设置附件上传目录// 上传文件
		 $info   =   $upload->upload();
		 if(!$info) {// 上传错误提示错误信息  
		   $this->error($upload->getError());
		   }else{// 上传成功 获取上传文件信息    
		   foreach($info as $file){      
		   $image= $file['savepath'].$file['savename'];   
		    }}
		$array=array('user'=>I('post.user'),'psd'=>I('psd'),'files'=>$image);

		$info=M('cds')->where(array('id'=>I('post.id')))->save($array);
			if($info){
				$this->success('修改成功',U('bbd'),1);
			}else{
				$this->error('修改失败');
			}
	}

	public function all(){
		$id=I('post.id');
		$cd=rtrim($id,',');
		$info=M('cds')->delete($cd);
		if($info){
			echo 1;
		}else{
			echo 2;
		}
	}

}
?>