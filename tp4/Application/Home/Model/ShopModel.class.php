<?php
namespace Home\Model;
use Think\Model;
class ShopModel extends Model {

	public function cdd($array){
	

		session_start();
		$uid=$_SESSION['id'];
		if(empty($uid)){
			$data['status']='100';
			$data['info']="用户未登录，麻溜去登录"; 
			return $data;
		}else{
			$array['useid']=$uid;
			$array['create_time']=time();
			$array['number']=$array['number'];
			$info=M('shopcar')->add($array);
			if($info){
				$data['status']='101';
				$data['info']="加入成功"; 
				return $data;

			}else{
				$data['status']='102';
				$data['info']="加入失败"; 	
				return $data;

			}
		
		}


	 }

	 public function show(){
	 	$uid=$_SESSION['id'];
	 	$info=M('shopcar')->join('jy_shop on jy_shopcar.shopid=jy_shop.shopid')->where(array("useid"=>$uid))->select();
	foreach ($info as $k => $v) {
	 		$info[$k]['sumprice']=$v['number']*$v['price'];
	 		$info[$k]['iamge']=explode(',',$v['image']);
	 	}
	 	return $info;
	 }



}