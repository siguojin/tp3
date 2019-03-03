<?php
namespace Home\Controller;
use Think\Controller;
// +----------------------------------------------------------------------
// |文件描述：建立  PrivilegesController.class.php 文件完成  后台导航管理     功能的实现
// |操作人：郝云   联系电话：18611112274    代码有问题各位及时沟通
// |博客地址：http://blog.csdn.net/haoyunyun888
// +----------------------------------------------------------------------

class PrivilegesController extends Controller
{
	//书写方法显示新增导航的页面
	//访问地址：http://www.siguojin.com/index.php/Home/Privileges/addPrivileges
	public function add(){
		$arr=M('privileges')->select();//查询表中的信息
		$info=$this->list_level($arr);//调用递归 数据格式调整
		$this->assign("info",$info);//赋值
		$this->display('addmanager');
	}

	//书写方法insert 实现接收表单提交过来的数据  做入库处理
	public function insert(){
		$data=I('post.');//表里的字段与name值一致   如果不一致  处理一个数组
		$info=M("privileges")->add($data);
		if($info){
			$this->success("新增成功",U('show'));
		}else{
			$this->error("新增失败");
		}
	}
	//书写方法show 完成信息显示
	public function show(){
		$arr=M('privileges')->where(array("status"=>0))->select();//查询表中的信息
		$info=$this->list_level($arr);//调用递归 数据格式调整
		$this->assign("info",$info);//赋值
		$this->display('manager');
	}
	//递归的方法
	public function list_level($arr, $pid = 0, $level = 0)
    {
        static $data = array();
        foreach ($arr as $k => $v) {
            if ($v['pid'] == $pid) {
                $v['level'] = $level;
                $data[] = $v;
                $this->list_level($arr, $v['id'], $level + 1);
            }
        }
        return $data;
	}
	//品牌管理对应的控制器
	public function category(){
		$arr=M('privileges')->where(array('status'=>1))->select();//查询表中的信息
		$info=$this->list_level($arr);//调用递归 数据格式调整
		$this->assign("info",$info);//赋值
		$this->display();
	}
	public function demo(){
		$arr=M('privileges')->where(array("status"=>1))->select();//查询表中的信息
		$info=$this->list_level($arr);//调用递归 数据格式调整
		$this->assign("info",$info);//赋值
		$this->display('insert_categor');
	}
		//书写方法insert 实现接收表单提交过来的数据  做入库处理
	public function insert_demo(){
		$data=I('post.');//表里的字段与name值一致   如果不一致  处理一个数组
		$info=M("privileges")->add($data);
		if($info){
			$this->success("新增成功",U('category'));
		}else{
			$this->error("新增失败");
		}
	}
}