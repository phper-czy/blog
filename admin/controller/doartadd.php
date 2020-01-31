<?php
// 写入文章
file_put_contents('./data/arts/' . $_POST['title'], $_POST['content']);
message('添加成功!',"index.php?a=artlist");