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
class CategoryController extends Controller
{
		public function  category_add(){
			$info=M('shopcategory')->order("number desc")->select();
			$data=$this->list_level($info);
			$this->assign('info',$data); 
			$this->display();
		}
		//显示页面
		public function show(){
			if(!$_POST){
			$info=M('shopcategory')->order("number desc")->select();
			$data=$this->list_level($info);
			$this->assign('info',$data); 
			$id=I('get.id');
			$this->assign('id',$id);
			$this->display();
			}else{
			
			$array=array('fid'=>I('pid'),'type_name'=>I('post.type_name'),'number'=>I('post.number'));
			$info=M('shopcategory')->add($array);
			if($info){
				$this->success('分类添加成功',U('category_add'));
			}else{
				$this->error('分类添加失败');
			}

			}
		}

		public function list_level($arr, $pid = 0, $level = 0){#分页
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

		public function delete(){#删除
			$info=M('shopcategory')->where(array('id'=>I('get.id')))->delete();
			if($info){
				$this->success('删除成功',U('category_add'));
			}else{
				$this->error('删除失败');
			}
		}
  
}



  ?>