<?php
$title = $_GET['title'];
$content = file_get_contents('./data/arts/' . $title);
view('artedit');

