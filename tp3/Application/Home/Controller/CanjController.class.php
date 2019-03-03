<?php
namespace Home\Controller;
use Think\Controller;
// +----------------------------------------------------------------------
// |鎺у埗鍣ㄥ悕绉癧鐢ㄦ埛绠＄悊鐨勬帶鍒跺櫒]
// +----------------------------------------------------------------------
// | 鏃堕棿锛2018骞10鏈10鏃9:42:10
// +----------------------------------------------------------------------
// | Author: Mr.hao
// +----------------------------------------------------------------------
class CanjController extends Controller
{


	public function add(){
		header("content-type:text/html;charset=gbk");
		$array=array();
		$info=M('qe');
		for ($i=1; $i <=10; $i++) { 
		$a=file_get_contents('https://search.51job.com/list/000000,000000,0000,00,9,99,php,2,'.$i.'.html?lang=c&stype=&postchannel=0000&workyear=99&cotype=99&degreefrom=99&jobterm=99&companysize=99&providesalary=99&lonlat=0%2C0&radius=-1&ord_field=0&confirmdate=9&fromType=&dibiaoid=0&address=&line=&specialarea=00&from=&welfare=');

		preg_match_all(' #<span>\s+<a target="_blank" title="(.+)" href#',$a,$b);#鍏徃

		preg_match_all('#<span class="t2"><a target="_blank" title="(.+)" href#',$a,$c);#鍦板潃
		preg_match_all('#</span>\s+<span class="t4">(.+)</span>\s+#',$a,$d);#钖祫
		preg_match_all('#</span>\s+<span class="t5">(.+)</span>\s+#',$a,$e);#骞存湀浠
		preg_match_all('#</a></span>\s+<span class="t3">(.+)</span>#',$a,$f);//?氓搂?
		
		$array['gs']=$b[1];
		$array['dz']=$c[1];
		$array['dd']=$f[1];
		$array['xz']=$d[1];
		$array['ny']=$e[1];
		
			// print_r($array);die;
			$sql='insert into jy_qe values';
			$sqlValue='';
			$sign='';
			foreach ($array['gs'] as $key => $value) {
				$sqlValue= $sqlValue.$sign.'(null,"'.$value.'","'.$array['dz'][$key].'","'.$array['dd'][$key].'","'.$array['xz'][$key+1].'","'.$array['ny'][$key+1].'")';
				$sign=",";
				}
				
			$info->execute($sql.$sqlValue);	
			// echo $sql.$sqlValue;
		}

	}


	function show(){
			header("content-type:text/html;charset=gbk");
		$User = M('qe'); // 实例化User对象// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
		$list = $User->page($_GET['p'].',20')->select();
		$this->assign('list',$list);// 赋值数据集
		$count      = $User->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,1);// 实例化分页类 传入总记录数和每页显示的记录数
		$Page->setConfig('prev','上一页');
		$Page->setConfig('next','下一页');
		$show       = $Page->show();// 分页显示输出
		$this->assign('page',$show);// 赋值分页输出
		$this->display(); // 输出模板


	}

	public function bdd(){
	header("content-type:text/html;charset=gbk");
		$User = M('qe'); // 实例化User对象// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
		$list = $User->page($_GET['p'].',20')->select();
		$this->assign('list',$list);// 赋值数据集
		$count      = $User->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,1);// 实例化分页类 传入总记录数和每页显示的记录数
		$Page->setConfig('prev','上一页');
		$Page->setConfig('next','下一页');
		$show       = $Page->show();// 分页显示输出
		$this->assign('page',$show);// 赋值分页输出
		$this->display(); // 输出模板
		
	}

}
?>