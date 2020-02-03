<?php
// 前台入口文件
// 定义一个常量方便修改入口文件

define('IN','index.php');
include("./function.php");

$action = !empty($_GET['a'])?$_GET['a']:"index";

 include('./controller/index/' . $action . '.php');