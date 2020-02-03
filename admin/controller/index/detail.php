<?php
$title = $_GET['title'];
$content = file_get_contents('./data/arts/' . $title);
$data = [
    'title'=>$title,
    'content'=>$content
];
viewindex('detail');
