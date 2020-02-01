<?php
// 后台入口文件
// 定义一个常量方便修改入口文件
define('AD','admin.php');
session_start();
include("./function.php");
// 设置不需要验证是否登录的白名单
$white = ['dologin','login'];
$action = !empty($_GET['a'])?$_GET['a']:"main";
if(!in_array($action,$white)){
    check_login();
}
 include('./controller/admin/' . $action . '.php');