<?php
namespace Home\Controller;
use Think\Controller;
// +----------------------------------------------------------------------
// |控制器名称[用户管理的控制器]
// +----------------------------------------------------------------------
// | 时间：2018年9月26日10:26:10
// +----------------------------------------------------------------------
// | Author: Mr.hao
// +----------------------------------------------------------------------
class UserController extends Controller
{
    //用户显示
    public function  showUser(){
        header("content-type:text/html;charset=utf8");
        $User = M('user'); // 实例化User对象// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
        $p=isset($_GET['p']) ? $_GET['p'] :'1';
        $list = $User->page($p.',1')->order("id asc")->select();
        $this->assign('info',$list);// 赋值数据集
        $count      = $User->where($where)->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,1);// 实例化分页类 传入总记录数和每页显示的记录数
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $show       = $Page->show();// 分页显示输出
        $this->assign('page',$show);// 赋值分页输出
        $this->display('manager'); // 输出模板
    }
    //添加用户显示页面
    public function addUser(){
        $info=M("roles")->select();
        $this->assign('info',$info);
        $this->display('addmanager');
    }
    //接收数据的方法
    public function insertUser(){
        $array=array("username"=>I('post.username'),"email"=>I('post.email'),"telphone"=>I("post.telphone"),"address"=>I('post.address'),'password'=>md5(I('post.password')),'create_time'=>date('Y-m-d'));//拼接入库 入到用户表
        $info=M("user")->add($array);//添加用户  成功之后 会将用户id返回过来
        if($info){
            //成功后将角色id 和用户id 入库
            $roles=I('post.roles');
            $count=count($roles);//用户选择几个角色
            for ($i=0; $i <$count ; $i++) { 
                $dataList[] = array('uid'=>$info,'rid'=>$roles[$i]);//整合数组批量入库
            }
            $datas=M('userrole')->addAll($dataList);
            $this->success("新增用户成功",U('showUser'));//成功提示信息
        }else{
            $this->error("新增用户失败");//失败提示信息
        }
    }
    public function deleteRole(){
        $where['rid']  = array('in','20,21');
        $info=M("roles")->where($where)->delete();
        echo M()->_sql();
    }
    //上传图片显示页面
    public function userUpload(){
        $this->display();
    }
    //接收上传图片信息
    public function Useruploads(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->savePath  =      './Uploads/'; // 设置附件上传目录// 上传文件 
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息    
        $this->error($upload->getError());
        }else{// 上传成功 获取上传文件信息    
            foreach($info as $file){        
                echo $file['savepath'].$file['savename'];    
            }
        }
    }

    public function delete(){//用户删除
        $info=M('user')->where(array('id'=>I('get.id')))->delete();
        if($info){
            $this->success('删除成功',U('showUser'),2);
        }else{
            $this->error('删除失败');
        }
    }

    public function update(){//用户修改

            // $infos=M('roles')->select();
            // $this->assign('infos',$infos);
            // $infoq=M('userrole')->where(array('uid'=>I('get.id')))->select();
            // foreach ($infoq as $key => $value) {
            //         $array[]=$value['rid'];
            // }
            //    $this->assign('array',$array);
            //     $info=M('user')->where(array('id'=>I('get.id')))->find();
            //     $this->assign('info',$info);
            //     $this->display();


        $infos=M('roles')->select();//查询角色表
        $this->assign('infos',$infos);//传值角色表

        $infoq=M('userrole')->where(array('uid'=>I('get.id')))->select();//根据用户id查询到用户角色id
        foreach ($infoq as $key => $value) {
                $array[]=$value['rid'];//查询对应的uid，把他对应的rid选中
        }
        $this->assign('array',$array);//传递array值

        $info=M('user')->where(array('id'=>I('get.id')))->find();//修改的
        $this->assign('info',$info);//传值
        $this->display();



    }

    public function update1(){//修改
            // $info=M('user')->where(array('id'=>I('post.id')))->save($array);
            $info=M('user')->where(array('rid'=>I('post.id')))->save(I('post.'));
            if($info){
                $this->success("修改成功",U('showUser'),1);
            }else{
                $this->error('修改失败');
            }


    }

    public function getinfo(){
        header('content-type:text/html;charset=utf-8');
        //如何根据用户id找到对应角色id
        //用户id 同过session 存储
        session_start();
        $uid=$_SESSION['userid']; 
        $info2=M('userrole')->where(array('uid'=>$uid))->select();
        foreach ($info2 as $key => $value) {
                $array2.=$value['rid'].',';
        }


        //1确定用户是什么角色
        $rid=rtrim($array2,',');#为商城管理角色
        #根据角色找出对应的权限， roleprivileges   根据rid找出对应pid
        // $where['rid']=$rid;//where条件，角色表对应权限表的id
        // $info=M('roleprivileges')->where($where)->select();
        #根据rid找到对应的pid rid=1,3
        $sql1="select * from jy_roleprivileges where rid in($rid)";
        $info=M()->query($sql1);
        //将数组整理怎样的格式4,6
        foreach ($info as $key => $value) {
                    $array.=$value['pid'].',';
        }
        //去除逗号
        $n_array=rtrim($array,',');
        //根据角色对应的id查询权限的信息
        $sql="select * from jy_privileges where id in($n_array)";
        $data=M()->query($sql);
    print_r($data);   

}
    
        public function demo(){
            $this->display();
        }

}