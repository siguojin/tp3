<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model {
    //model中insert_user方法
    public function insert_user(){
        //验证密码与确认密码是否一致
        if(I('post.password')!=I('post.password_confirm')){
            $data['info']="两次密码不一致";
            $data['status']='2';
            return $data;
        }
        //检测库中有没有此信息注册
        $infos=M("user")->where(array("telphone"=>I("post.phone")))->find();
        if($infos){
            $data['info']="该信息已存在，请重新输入";
            $data['status']='33';
            return $data;
        }
        $array['username']=I('post.username');//取用户名
        $array['address']=I('post.address');//取地址
        $array['password']=md5(I('post.password'));//取密码
        $array['telphone']=I('post.phone');//取手机号
        $array['email']=I('post.email');//去邮箱
        $array['create_time']=date("Y-m-d H:i:s");//获取用户注册时间
        $info=M('user')->add($array);
        if($info){
            //注意事项：是不是新增用户成功后才执行底下的方法
            //根据接值获取个数
            $count=count(I('post.rolenames'));
            $rolenames=I('post.rolenames');
            for ($i=0; $i <$count ; $i++) { 
                $arrays[]=array("uid"=>$info,"rid"=>$rolenames[$i]);
            }
            M("userrole")->addAll($arrays);
            $data['info']="恭喜你注册成功";
            $data['status']='1';
        }else{
            $data['info']='新增失败';
            $data['status']='3';

        }
        return $data;
    }
    //model中manager_list 方法供控制器调用
    public function manager_list(){
        $data['info']=M('user')->select();
        $data['create_time']="2018年9月26日14:11:45";
        $data['status']="100";
        return $data;
    }
    //model中userdeleteModel 方法 供控制器调用 实现删除功能  
    //参数：id   技能点：delete
    public function userdeleteModel(){
        $info=M("user")->where(array("id"=>I('get.id')))->delete();
        if($info){
            $data['info']="删除成功";
            $data['status']="1";
        }else{
            $data['info']="删除失败";
            $data['status']="2";
        }
        return $data;
    }
    //model中userUpdateModel 供控制器调用实现根据id查询某一个条信息 
    //参数：id 技能点：find
    public function userUpdateModel(){
        $info=M("user")->where(array("id"=>I('get.id')))->find();
        if($info){
            $data['list']=$info;
            $data['info']="获取成功";
            $data['status']="1";
        }else{
            $data['info']="获取失败";
            $data['status']="2";
        }
        return $data;
    }
    //model中usereditModel  供控制器调用实现修改信息
    public function usereditModel(){
        $array['username']=I('post.username');//取用户名
        $array['address']=I('post.address');//取地址
        //检测客户有没有修改密码
        if(!empty(I('post.password'))){
            $array['password']=md5(I('post.password'));//取密码
        }
        $array['telphone']=I('post.phone');//取手机号
        $array['email']=I('post.email');//去邮箱
        $info=M("user")->where(array("id"=>I('post.id')))->save($array);
        if($info){
            $data['info']="修改成功";
            $data['status']="1";
        }else{
            $data['info']="修改失败";
            $data['status']="2";
        }
        return $data;
    }
}