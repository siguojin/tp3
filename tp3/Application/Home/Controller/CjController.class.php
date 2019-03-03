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
class CjController extends Controller
{

	public function add(){

		$a=file_get_contents('http://v.juhe.cn/sms/send?mobile=13521727768&tpl_id=123123&tpl_value=111&key=b9b06e0e583d69b1bc981f6ac09037db');
		preg_match($a,$b);
		
	}


}
?>