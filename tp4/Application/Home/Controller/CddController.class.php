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
class CddController extends Controller
{

    public function add(){

     	if(!$_POST){
		$this->display();
    	}else{
    	
    		$array=array("user"=>I('post.user'),'cd'=>I('post.cd'),'psd'=>I('post.psd'),'phon'=>I("post.phon"));
    		$info=M('jie')->add($array);
    		if($info){
    			echo 1;
    		}else{
    			echo 2;
    		}
    	}
    }

    public function cdd(){
    	$this->display();
    }
    public function bdd(){
    	$info=M('jie')->select();
	print_r( json_encode($info));
    }


    public function select(){
		// $Model = M('Artist');$Model->join('think_work ON think_artist.id = think_work.artist_id')->join('think_card ON think_artist.card_id = think_card.id')->select();

		$info=M('add')->join('jy_bdd on jy_add.pid=jy_bdd.id')->select();
		$this->assign("list",$info);
		$this->display();
	}


	public function insert(){
		if(!$_POST){
			$this->display();
		}else{
			$upload = new \Think\Upload();// 实例化上传类
			$upload->maxSize   =     3145728 ;// 设置附件上传大小
			$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->savePath  =      '/Uploads/'; // 设置附件上传目录// 上传文件 
			$info   =   $upload->upload();
			if(!$info) {// 上传错误提示错误信息   
			 $this->error($upload->getError());
			 }else{// 上传成功 获取上传文件信息   
			  foreach($info as $file){       
			   $files= $file['savepath'].$file['savename'];   
			}
		}
		$array=array('file'=>$files,'names'=>I('post.name'));
		$info=M('bdd')->add($array);
		if($info){
			$this->success("添加成功",U("select"));
		}else{
			$this->error("添加失败");
		}

		}
	}


	public function cd(){
		$info=M('qq')->select();
		$this->assign('info',$info);
		$this->display();
	}

	public function clcl(){
		$cd=I('post.id');
		$id=rtrim($cd,',');
		$info=M('qq')->delete($id);
		if($info){
			echo 1;
		}
	}

}



?>