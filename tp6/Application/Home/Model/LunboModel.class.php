<?php
namespace Home\Model;
use Think\Model;
class LunboModel extends Model {

	public function inserts(){
		header("content-type:text/html;charset=UTF-8");
		$upload = new \Think\Upload();// 实例化上传类
		$upload->maxSize   =     3145728 ;// 设置附件上传大小
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->savePath  =      '/Uploads/'; // 设置附件上传目录// 上传文件
		 $info   =   $upload->upload();
		 if(!$info) {// 上传错误提示错误信息    
		 // $this->error($upload->getError());
		 }else{// 上传成功 获取上传文件信息   
		  foreach($info as $file){        
		  $files[]= $file['savepath'].$file['savename'];  
		   }
		}
		  $new_files=implode(',',$files);
		   $array['users']=I('post.users');#获取轮播名称
		   $array['emali']=I('post.emali');#获取轮播地址
		   $array['files']=$new_files;//获取图片
		   $array['number']=I('post.number');#轮播排序
		   $array['block']=I('post.block');#轮播显示
		   $array['date']=time();#创建时间
		   $infos=M('lunbo')->add($array);
		   if($infos){
		   	$data['info']='轮播图新增成功';
		   	$data['str']='1';
		   }else{
		   	$data['info']='轮播图新增失败';
		   	$data['str']='2';
		   }
		   return $data;

	}

	public function cdd(){
		
	}


}