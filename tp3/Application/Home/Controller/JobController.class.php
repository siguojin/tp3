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
class JobController extends Controller{
    
    public function index(){
            header("content-type:text/html;charset=gbk");
            //取得指定位址的内容，并储存至text
            $text=file_get_contents('https://search.51job.com/list/000000,000000,0000,00,9,99,php,2,1.html?lang=c&stype=&postchannel=0000&workyear=99&cotype=99&degreefrom=99&jobterm=99&companysize=99&providesalary=99&lonlat=0%2C0&radius=-1&ord_field=0&confirmdate=9&fromType=&dibiaoid=0&address=&line=&specialarea=00&from=&welfare=');
            //去除换行及空白字元（序列化内容才需使用）
            //$text=str_replace(array("r","n","t","s"), '', $text);
            //取出div且id为PostContent的内容，并储存至阵列match
              preg_match_all('#<span>\s+<a target="_blank" title="(.*)" href#',$text,$a);
              preg_match_all('#<span class="t2"><a target="_blank" title="(.*)" href#',$text,$b);
              preg_match_all('#</a></span>\s+<span class="t3">(.*)</span>\s+#',$text,$c);
            //印出match[0]
            //  var_dump($a);
            // var_dump($b);
            // var_dump($c)
            // 
            // 
            // 
               $ch=curl_init();
            curl_setopt($ch,CURLOPT_URL,'https://search.51job.com/list/010000,000000,0000,00,9,99,php,2,1.html?lang=c&stype=&postchannel=0000&workyear=99&cotype=99&degreefrom=99&jobterm=99&companysize=99&providesalary=99&lonlat=0%2C0&radius=-1&ord_field=0&confirmdate=9&fromType=&dibiaoid=0&address=&line=&specialarea=00&from=&welfare=');
            //curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);


            //$a='';
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            //curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file);

            curl_setopt($ch, CURLOPT_HEADER, 0);//是否显示头部信息
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);
            //curl_setopt($ch, CURLOPT_COOKIEFILE,$a);


            $data = curl_exec($ch);
     }

}
?>

