<?php

$db = mysqli_connect('localhost', 'root', '3115', 'level1'); //db연결

if ($db) {
    echo 'DB접속 성공';
}
else {
    echo 'DB접속 실패';
}
