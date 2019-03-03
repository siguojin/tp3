<?php
namespace Home\Controller;
use Think\Controller;
//角色管理控制器
class RolesController extends Controller
{
    //添加角色  方法
    public function addRole(){
    	$this->display();
    }
    //用来处理接收数据
    public function addInsert(){
    	$data=I('post.');//接收POST传输的所有数据
    	//调整
    	$count=count($data['rolename']);//求出角色的个数
    	for ($i=0; $i < $count; $i++) { 
    		$array[]=array('role_name'=>$data['rolename'][$i],"create_time"=>date("Y-m-d H:i:s"),"status"=>1);//参考手册addall 数组格式完成批量新增
    	}
    	$info=M("roles")->addAll($array);
    	if($info){
    		$this->success("新增角色成功",U("showRole"));
    	}else{
    		$this->error("新增角色失败");
    	}
    }
    //定义一个showRole方法实现信息显示
    public function showRole(){
    	$User = M('roles'); // 实例化User对象// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
        $p=isset($_GET['p']) ? $_GET['p'] :'1';
        $list = $User->page($p.',10')->select();
        $this->assign('info',$list);// 赋值数据集
        $count      = $User->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
        $show       = $Page->show();// 分页显示输出
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }
    public function showRoles(){
        $User = M('roles'); // 实例化User对象// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
        $list = $User->page($_GET['p'].',1')->select();
        $this->assign('list',$list);// 赋值数据集
        $count      = $User->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,1);// 实例化分页类 传入总记录数和每页显示的记录数
        $show       = $Page->show();// 分页显示输出
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板。
    }
    //建立一个方法设置权限针对角色
    public function seting(){
        $info=M('roles')->select();
        $this->assign("info",$info);
        #获取角色id
        $rid=I('get.id');
        #如何根据角色id查询角色权限对应的表
        $data=M('roleprivileges')->where(array('rid'=>$rid))->select();  
        foreach ($data as $key => $value) {
                $array[]=$value['pid'];
        }
        $this->assign('array',$array);
        $this->assign('id',I('get.id'));
        $this->display();
    }
    //写一个方法接收权限的信息 然后入库处理
    //入库思路：确定角色id  和  权限id  获取到
    public function setPrivileges(){
        $info=I('post.');
        M('roleprivileges')->where(array('rid'=>$info['rid']))->delete();
        $count=count($info['pname']);//3 
        for ($i=0; $i <$count ; $i++) { 
            $dataList[] = array('rid'=>$info['rid'],'pid'=>$info['pname'][$i]);
        }
        $infos=M('roleprivileges')->addAll($dataList);
        if($infos){
            $this->success("设置权限成功",U("showRole"));
        }else{
            $this->error("设置权限失败");
        }
    }
    //即点即改接受的方法
        public function saveroles(){
            $array=array('role_name'=>I('post.names'));
            $info=M('roles')->where(array('rid'=>I('post.id')))->save($array);
            if($info){
                echo 1;
            }else{
                echo 2;
            }

        }

}