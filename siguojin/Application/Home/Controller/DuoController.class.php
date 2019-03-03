<?php
namespace Home\Controller; 
use Think\Controller;
//角色管理控制器
class DuoController extends Controller
{


	public function add(){
		$this->display();
	}

	public function add_insert(){
	$upload = new \Think\Upload();// 实例化上传类
	$upload->maxSize   =     3145728 ;// 设置附件上传大小
	$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
	$upload->savePath  =      '/Uploads/'; // 设置附件上传目录// 上传文件 
	$info   =   $upload->upload();if(!$info) {// 上传错误提示错误信息    
	$this->error($upload->getError());}else{// 上传成功 获取上传文件信息    
	foreach($info as $file){   
	    $image[]=$file['savepath'].$file['savename'];    }
	}

	$array=array('files'=>implode(',',$image));//数组分割开
	$info=M('duo')->add($array);
	if($info){
		$this->success('添加成功',U('bdd'));
	}else{
		$this->error("添加失败");
	}
}
	
	public function bdd(){

		$info=M('duo')->select();
		foreach ($info as $key => $value) {
			$info[$key]['侯少雄儿子']=explode(',', $value['files']);
		}
	
		$this->assign('info',$info);
		$this->display();


	}


}








