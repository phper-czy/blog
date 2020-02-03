<?php
$username = $_POST['username'];
$password = $_POST['password'];
// var_dump($_POST);exit;
// 从数据库中获取用户信息
$link = mysqli_connect("127.0.0.1",'root','root','project','3306');
if(!$link){
    echo '数据库连接失败!';
}
// 设置字符编码
mysqli_query($link,'SET NAMES utf8');
$sql = "SELECT * FROM account WHERE username='{$username}'";
$rs = mysqli_query($link,$sql);
$userinfo = mysqli_fetch_assoc($rs);
// var_dump($userinfo);
// exit;
if(empty($userinfo)){
    message('用户名不存在!','login');
    exit;
}elseif($userinfo['password'] == md5($password)){
    $_SESSION['username'] = $username;
    message('登录成功!','main');
}else{
    message('密码错误!','login');
}

