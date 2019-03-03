<?php
namespace Home\Controller;
use Think\Controller;
// +----------------------------------------------------------------------
// |控制器名称[轮播图]
// +----------------------------------------------------------------------
// | 时间：2018年10月15日3:52:10
// +----------------------------------------------------------------------
// | Author: Mr.hao
// +----------------------------------------------------------------------
class LunboController extends Controller
{

	

	public function bdd(){//添加轮播图
		$this->display();
	}

	public function insert(){
	$model=D('Lunbo');
	$data=$model->inserts();
	if($data['str']==1){
		$this->success('添加成功',U('add'));
	}else{
		$this->error('添加失败');
	}

	}

	public function add(){//轮播页面
		$info=M('lunbo')->select();
		foreach ($info as $k => $v) {
			$info[$k]['files']=explode(',',$v['files']);

		}
		//查询状态唯一的特别推荐
		$this->assign("info",$info);
		$this->display();

	}

	public function delete(){#删除
		$info=M('lunbo')->where(array('lun_id'=>I('get.id')))->delete();
		if($info){
			$this->success('删除成功',U('add'));
		}else{
			$this->error('删除失败');
		}
	}


	public function index(){#跳的网站轮播图
		$info=M('lunbo')->select();
		$this->assign('info',$info);
		$this->display();
	}
	public function cdd(){//查看顶级id所对应的值
		$info=M('diqu')->where(array('pid'=>0))->select();
		$this->assign('info',$info);
		$this->display('bdd');
	}

	public function edd(){

		$info=M('diqu')->where(array('pid'=>I('post.sid')))->select();
		$str="";
		if($_POST['sid']){
			$str.="<option>请选择市</option>";	
		}else{
			$str.="<option >请选择县</option>";
		}
		
		foreach ($info as $k => $v) {
			$str.="<option value='$v[id]'>$v[users]</option>";
		}
		echo  $str;


	}




}