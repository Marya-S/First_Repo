<?php

function DBUse(){
    return[
     'DBHost' => '',
     'DBUser' => 'root',
     'DBPass' => '',
     'DBName' => 'News',
        ];
}
function DBCon(){
    $ConDate= DBUse();
    mysql_connect($ConDate['DBhost'],$ConDate['DBUser'],$ConDate['DBPass']);
    mysql_select_db($ConDate['DBName']);
}