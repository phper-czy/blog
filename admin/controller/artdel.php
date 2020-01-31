<?php
$title = $_GET['title'];
unlink('./data/arts/' . $title);
message('删除成功!','index.php?a=artlist');