<?php
$deltitle = $_POST['deltitle'];
foreach($deltitle as $v){
    unlink('./data/arts/' . $v);
}
message('删除成功!','index.php?a=artlist');
