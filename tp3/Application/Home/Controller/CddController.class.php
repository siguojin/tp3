2018-12-07 18:32:48

<?php
/**
 * Created by PhpStorm.
 * User: 辰星
 * Date: 2018/11/30
 * Time: 16:17
 */
 
///************/////登录
  $curl = curl_init();
$cookie_jar = 'aa.txt';
curl_setopt($curl, CURLOPT_URL,'https://www.diaochapai.com/login');//这里写上处理登录的界面
curl_setopt($curl, CURLOPT_POST, 1);//说明使用POST传值
$request = 'email=2505704831@qq.com&passwd=jiyun123456';
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);//关闭对HTTPS进行验证
curl_setopt($curl, CURLOPT_POSTFIELDS, $request);//POST传 递数据
curl_setopt($curl, CURLOPT_COOKIEJAR, $cookie_jar);// 把返回来的cookie信息保存在$cookie_jar文件中
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);//设定返回 的数据是否自动显示
curl_setopt($curl, CURLOPT_HEADER, false);//设定是否显示头信 息
curl_setopt($curl, CURLOPT_NOBODY, false);//设定是否输出页面 内容
curl_exec($curl);//返回结果
curl_close($curl); //关闭
 

 
 //采集
   $ch=curl_init();
   curl_setopt($ch,CURLOPT_URL,'https://www.diaochapai.com/my/survey');
   //curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
   


   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file);


   curl_setopt($ch, CURLOPT_HEADER, 0);//是否显示头部信息
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);
   curl_setopt($ch, CURLOPT_COOKIEFILE,'aa.txt');
   
 
   $data = curl_exec($ch);
   
   echo $data;
   
   
   ?>