<?php
//    CURL POST访问
function send_post($remote_server, $post_string) {
  $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $remote_server);
  curl_setopt($ch, CURLOPT_PROXY, $ip);
  curl_setopt($ch, CURLOPT_POSTFIELDS, 'mypost=' . $post_string);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.80 Safari/537.36 Edg/98.0.1108.50");
  $data = curl_exec($ch);
  curl_close($ch);
  return $data;
}

//    获取一个随机7k账号，不能低于6位且不能高于12位
function kid($len=6){
    $t = time();    // 获取当前时间戳
    $_md5 = md5($t);    // 将时间戳转为MD5格式，避免重复
    $r = rand(0,32-$len);    // 获取一个随机数
    $_md5_12 = substr($_md5, $r, 12);    // 在加密的数据中随机取出6-12位字符
    return $_md5_12;    // 返回结果
}

//    输出JSON信息
function msg($msg,$code=200){
  $ret = array(
      'code' => $code,
      'msg' => $msg
  );
  return json_encode($ret);
}


$name = $_GET['name'];    // 获取用户提交的姓名
$id = $_GET['id'];    // 获取用户提交的身份证号
if($name != '' &&  strlen($id) === 18){    // 用户是否输入数据
    $kid = kid();    // 获取一个随机7K账号
    $pwd = kid(8);    // 获取一个随机的密码
    $post_data = "authcode=72A3&identity=$kid&realname=$name&card=$id&mode=identity&codekey=reg&password=$pwd&reg_type=web7k";    // 提交数据
    $data = send_post('http://zc.7k7k.com/post_reg', $post_data);    // 获取返回数据
    $data = json_decode($data,true);    // 将返回的数据解析为数组
    
    if($data['data'] == '实名信息认证失败14' || $data['data'] == ''){    // 认证失败则是姓名和身份证号不符
      echo msg('error',201);
    }elseif($data['data'] == '已无实名认证次数，请于24小时后尝试16'){    // 因该是同一姓名查询次数过多导致
      echo msg('访问频繁，请等待24小时后再次尝试！',202);
    }else{
      echo msg('success');    // 返回验证码错误或其他信息则是姓名和证件相符
    }
}else{
    echo msg('Name or ID number is incorrect',203);    // 是姓名和身份证号为空或不符合规则
}