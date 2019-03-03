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
class addController extends Controller
{

	public function bdd(){
		$User = M('qq'); // 实例化User对象// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
		$list = $User->page($_GET['p'].',2')->select();
		$this->assign('list',$list);// 赋值数据集
		$count      = $User->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,1);// 实例化分页类 传入总记录数和每页显示的记录数
		$Page->setConfig('prev','上一页');
		$Page->setConfig('next','下一页');

		$show       = $Page->show();// 分页显示输出
		$this->assign('page',$show);// 赋值分页输出
		$this->display(); // 输出模板
	}

	public function clcl(){
		
		$cd=I("post.id");
		$id=rtrim($cd,',');
		$info=M('qq')->delete($id);
		if($info){
			echo 1;
		}else{
			echo 2;
		}
	}


}
?>