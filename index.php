<?php
  $keyword  = 'PHP cURL';
  $url    = 'http://www.baidu.com/s?ie=utf-8&f=8&rsv_bp=1&ch=&tn=baidu&bar=&wd=' . urlencode($keyword);

  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //返回数据不直接输出
  $content = curl_exec($ch);          //执行并存储结果
  var_dump(curl_getinfo($ch));

  curl_close($ch);

  echo $content;


//date_default_timezone_set('Asia/Shanghai');
//echo date('Y-m-d',time());
//echo strtotime(date('Y-m-d',time()));
//exit;
//echo date('Y-m-d H:i:s',strtotime('yesterday'));
//echo '<br />';
//echo  date('Y-m-d H:i:s',strtotime('-1 day'));

// echo ip2long('192.168.0.1');echo "<br>";
// echo long2ip('-1062731775');
// date('Y-m-d', strtotime('yesterday'));
// $rand_six = str_pad(base_convert(19999, 10, 32), 4, 0, STR_PAD_LEFT).date('m', time());
// echo $rand_six;
//phpinfo();exit;
//$redis = new Redis();
//
//$redis->connect('127.0.0.1',6379);
//
//$password = '123456';
//
//$redis->auth($password);
//
//$arr = array('h','e','l','l','o','w','o','r','l','d');
//
//foreach($arr as $k=>$v){
//
//    $redis->rpush("mylist",$v);
//
//}