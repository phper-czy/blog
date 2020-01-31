<?php 
$title = $_POST['title'];
$content = $_POST['content'];
// 使用隐藏域获取原来的文件名
$oldtitle = $_POST['oldtitle'];
// 写入新的内容
file_put_contents('./data/arts/' . $oldtitle,$content);
// 修改原来的文件名
rename('./data/arts/' . $oldtitle,'./data/arts/' . $title);
message('修改成功!',"index.php?a=artlist");