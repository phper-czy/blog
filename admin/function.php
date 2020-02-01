<?php
function message($mess,$url){
    $url = IN . "?a=" . $url;
    echo <<<JS
    <script>
    alert("{$mess}!");
    location.href="{$url}";
    </script>
JS;
}
//加载静态页的函数
function view($name){
    $url = "./view/admin/" . $name . ".html";
    include($url);
}

function check_login(){
    //判断是否登录
if(!isset($_SESSION['username'])){
  message('必须先登录','login');
  exit;
}
}
