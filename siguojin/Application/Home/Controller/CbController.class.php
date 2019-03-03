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
class CbController extends Controller
{	
	public function role_add(){
		if(!$_POST){
			$info=M('diqu')->where(array('pid'=>0))->select();
			$this->assign('info',$info);

			$this->display();
		}else{
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
			$image[]= $file['savepath'].$file['savename'];  
			 }}

			 $new_image=implode(',',$image);
			 $info=M('diqu')->where(array('id'=>I('post.sheng')))->getField('users');
			 $info2=M('diqu')->where(array('id'=>I('post.shi')))->getField('users');
			 $info3=M('diqu')->where(array('id'=>I('post.xian')))->getField('users');
			 $m=$info.$info2.$info3;
			 print_r($m);die;

			 $cd=implode(',',$_POST['psd']);
			 $md=implode(',',$_POST['user']);


			 $array=array('user'=>$md,'psd'=>$cd,
			 	'files'=>$new_image,'names'=>$m);
			 $info=M('cds')->add($array);
			 if($info){
			 	$this->success('添加成功',U('cdd'),1);
			 }else{
			 	$this->error('添加失败');
			 }
		}
	}

	public function cdd(){
		
		$info=M('cds')->select();
		foreach ($info as $k => $v) {
			$info[$k]['files']=explode(',', $v['files']);

		}
		$this->assign('list',$info);
		$this->display();

	}

	public function delete(){
		$info=M('cds')->where(array('id'=>I('get.id')))->delete();
		if($info){
			$this->success('添加成功',U('cdd'),1);
		}else{
			$this->error('添加失败');
		}

	}



	public function clcl(){
		$q=I('post.cd');
		if($q==1){
			$str.='<option value="请输入市">请输入市</option>';
		}else{
 			$str.='<option value="请输入县">请输入县</option>';    
		}

		$info=M('diqu')->where(array('pid'=>I('post.sid')))->select();
		foreach ($info as $ke => $v) {
			$str.="<option value='$v[id]'>$v[users]</option>";
			
		}
		echo $str;
	}

}

?>