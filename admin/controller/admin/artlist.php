<?php
$data = scandir('./data/arts');
unset($data[0]);
unset($data[1]);
viewadmin('artlist');