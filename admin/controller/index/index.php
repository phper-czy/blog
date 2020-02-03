<?php
// 获取文章的标题
$data = scandir("./data/arts");
unset($data[0]);
unset($data[1]);
foreach($data as &$v){
    // 以只读的方式打开文件
    $a = fopen('./data/arts/' . $v,"r");
    // 读取文章的内容
    $content = fread($a,100);
    $v = [
        "title"=>$v,
        "content"=>$content
    ];
    fclose($a);
}
// var_dump($data);exit;
viewindex('index');