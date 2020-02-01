<?php
function message($mess,$url){
    $url = AD . "?a=" . $url;
    echo <<<JS
    <script>
    alert("{$mess}!");
    location.href="{$url}";
    </script>
JS;
}
//加载后台静态页的函数
function viewadmin($name){
    $url = "./view/admin/" . $name . ".html";
    include($url);
}
//加载前台静态页的函数
function viewindex($name){
    $url = "./view/index/" . $name . ".html";
    include($url);
}

function check_login(){
    //判断是否登录
if(!isset($_SESSION['username'])){
  message('必须先登录','login');
  exit;
}
}
