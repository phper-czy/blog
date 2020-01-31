<?php
function message($mess,$url){
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
    echo <<<JS
    <script>
    alert("必须先登录!");
    location.href="index.php?a=login";
    </script>
JS;
}
}
