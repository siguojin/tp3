<?php 
	namespace Home\Controller;

	use Think\Controller;

	class BddController extends Controller
	{
		public function index()
		{
			$this->display();
		}

		public function insert()
		{
			
			$upload = new \Think\Upload();// 实例化上传类
			$upload->maxSize   =     3145728 ;// 设置附件上传大小
			$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->savePath  =      'Uploads/'; // 设置附件上传目录// 上传文件 
			$info   =   $upload->upload();if(!$info) {// 上传错误提示错误信息    
			$this->error($upload->getError());}else{// 上传成功 获取上传文件信息   
			 foreach($info as $file){        
			 	$image= $file['savepath'].$file['savename'];   
			  }}

			  $array=array("name"=>I('post.name'),'intro'=>I('post.intro'),'image'=>$image,'money'=>I('post.money'));
			  $info=M('shop')->add($array);
			  if($info){
			  	$this->success("添加成功",U('show'));
			  }


	}
	public function show()
	{
		$data=M('shop')->select();
            $lists = array_slice($data, 0, 4);  //把记录数每页分3条取出
            $this->bcount = ceil(count($data) / 4);//向上取整 总记录数 出 每页的显示的条数  但会到html中
		$d=M('search')->order('num desc')->limit(0,5)->select();
		$this->assign('data',$d);
        $this->assign('list',$lists);
		$this->display();
		//var_dump($data);die;
	}
	public function ajaxPage()
	{
		$sql = "select * from shop where 1 ";
        if($_POST['cxpid']){
            $sql .= " and name like '%".$_POST['cxpid']."%'or intro like '%".$_POST['cxpid']."%'";
        }
        //var_dump($sql);die;
        $list = M()->query($sql);
       // var_dump($list);die;
        $s=M('search')->where(array('r_name'=>$_POST['cxpid']))->find();
        if($s){
            $data['num']=$s['num']+1;
            M('search')->where(array('r_name'=>$s['r_name']))->save($data);
        }else{
            $data['r_name']=$_POST['cxpid'];
            $data['num']=$_POST['num'];
            M('search')->add($data);
        }
        $page   = $_POST['now'] ? $_POST['now'] : 1;
        $offset = ($page-1)*4;
        $resurt = array_slice($list, $offset, 4);
        //var_dump($resurt);die;
        $html = "";
        foreach ($resurt as $k=>$vo){
	        	$html .="<ul class=\"dl\">";
	        	$html .="<li>";
	        	$html .="<dl>";
	        	$html .="<dt><a href=\"index.php?m=home&c=shop&a=goods&id={$vo['id']}\">
                <img src=\"./Uploads/{$vo['image']}\" /></a></dt>";
	        	$html .="<dd class=\"title\"><a href=\"\">{$vo['name']}</a></dd>";
	        	$html .="<dd class=\"content\">";
	        	$html .="<span class=\"goods_jiage\">￥<strong>{$vo['money']}</strong></span>";
	        	$html .="</dd>";
	        	$html .="</dl>";
	        	$html .="</li>";
	        	$html .="</ul>";
			}
			print_r($html);
	}
	public function goods(){
        $id=$_GET['id'];
        //var_dump($id);
        $data=M('shop')->where(array('id'=>$id))->find();
        //var_dump($data);
        $this->assign('list',$data);
        $this->display();
    }

}