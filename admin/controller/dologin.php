<?php
$username = $_POST['username'];
$password = $_POST['password'];
// var_dump($_POST);exit;

$account = file_get_contents('./data/account');
// var_dump($account);exit;
$account = explode("\n", $account); 
// var_dump($account);exit;

$tmp = $username . ' ' . md5($password);

foreach($account as $v)
{
    // 2.4 把用户提交的账号和密码拼出和账号文件中格式一样的字符串
    // 2.4 判断账号是否正确
    if($tmp == $v)
    {
        // 3. 账号登录，在 SESSION 中保存 name 做为登录成功的标记
        $_SESSION['username'] = $username;
        // 4. 提示信息
        message('登录成功！', '');
    }
}
message('登录或者密码错误！', 'login');