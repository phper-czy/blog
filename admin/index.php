<?php
// 入口文件
session_start();
include("./function.php");
// 设置不需要验证是否登录的白名单
$white = ['dologin','login'];
$action = isset($_GET['a'])?$_GET['a']:"main";
if(!in_array($action,$white)){
    check_login();
}
 include('./controller/' . $action . '.php');