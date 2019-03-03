<?php
namespace Home\Controller;
use Think\Controller;
// +----------------------------------------------------------------------
// |控制器名称[商品管理的控制器]
// +----------------------------------------------------------------------
// | 时间：2018年10月11日11:42:10
// +----------------------------------------------------------------------
// | Author: Mr.hao
// +----------------------------------------------------------------------
class ShopController extends Controller
{

	public function insert(){
		
		if(!$_POST){
			$info=M('shopcategory')->select();
			$data=$this->list_level($info);
			$this->assign('info',$data);
			$this->display();

		}else{
			$upload = new \Think\Upload();// 实例化上传类
			$upload->maxSize   =     3145728 ;// 设置附件上传大小
			$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->savePath  =      '/Uploads/'; // 设置附件上传目录// 上传文件
			 $info   =   $upload->upload();if(!$info) {// 上传错误提示错误信息
			     $this->error($upload->getError());
			}else{// 上传成功 获取上传文件信息
			    foreach($info as $file){ 
			           $files[]=$file['savepath'].$file['savename'];
			     }
			     $image=implode(',',$files);
			 }
		$array=
		array('shopname'=>I('post.shopname'),//商品名称
			'model'=>I('post.model'),//商品型号
			'sku'=>I('post.sku'),//库存单元
			'location'=>I('post.location'),//产品所在地
			'quantity'=>I('post.quantity'),//商品数目
			'image'=>$image,//商品图片 
			'brand_id'=>I('post.brand_id'),//品牌编号
			'shipping'=>I('post.shipping'),//是否需要运送
			'price'=>I('post.price'),//商品价格
			'points'=>I('post.points'),//积分
			'date_available'=>I('post.date_available'),//供货日期
			'minimum'=>I('post.minimum'),//最小起丁数目
			'sort_order'=>I('post.sort_order'),//商品排序
			'status'=>I('post.status'),//上架
			'create_time'=>date("Y-m-d H:i:s"),//加入时间
			'update_time'=>I('post.update_time'),//修改时间
			'viewed'=>I('post.viewed'),//点击量
			'content'=>I('post.content'),//商品描述
			'fid'=>I('post.fid'),//fid
			'ktd'=>I('post.kit')
);

		$info=M('shop')->add($array);

		if($info){
			$this->success('添加商品成功',U('show'),2);
		}else{
			$this->error('添加商品是失败');
		} 
	}
	}
	public function show(){//显示
		$info1=M('shopcategory')->select();
		$data=$this->list_level($info1);
		$this->assign('info1',$data);
		$info=M('shop')->join('jy_shopcategory on jy_shop.fid=jy_shopcategory.id')->select();	
		foreach ($info as $k => $v) {
			$info[$k]['files']=explode(',',$v['image']);
		}
		
	

		$this->assign('info',$info);
		$this->display();	
	}

	public  function delete(){//删除
		$info=M('shop')->where(array('shopid'=>I('get.id')))->delete();
		if($info){
			$this->success('删除成功',U('show'),1);
		}else{
			$this->error('删除失败');
		}


	}

	public function update(){
		$info=M('shop')->where(array('shopid'=>I('get.id')))->find();
		$this->assign('info',$info);
		$this->display();
	}

	public function upload(){
		$info=M('shop')->where(array('shopid'=>I('post.id')))->save(I('post.'));
		if($info){
			$this->success('修改成功',U('show'));
		}else{
			$this->error('修改失败');
		}
	}


	public function list_level($arr, $pid = 0, $level = 0)//递归
    {
        static $data = array();
        foreach ($arr as $k => $v) {
            if ($v['fid'] == $pid) {
                $v['level'] = $level;
                $data[] = $v;
                $this->list_level($arr, $v['id'], $level + 1);
            }
        }
        return $data;
	}
 
	#上架下架
	public function shangjia(){
		header('content-type:text/html;charset=UTF-8');
		$id=I('get.id');
		$status=$_GET['status'];
		if($status==0){
			$array['status']="上架";
		}else{
			$array['status']="下架";
		}
		
		$list=M('shop')->where(array('shopid'=>$id))->save($array);
		if($list)
		{
			$this->success('修改成功',U('show'),1);
		}else{
			$this->error('修改失败');
		}

	}


}
?>