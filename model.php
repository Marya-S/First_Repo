<?php

function DBUse(){
    return[
     'DBHost' => 'localhost',
     'DBUser' => 'root',
     'DBPass' => '',
     'DBName' => 'News',
        ];
}
function DBCon(){
    $ConDate= DBUse();
    $res=mysql_connect($ConDate['DBHost'],$ConDate['DBUser'],$ConDate['DBPass']);
        if(!$res){
            return false;
        }
    $res=mysql_select_db($ConDate['DBName']);
    return $res;

}
function DBQuery($sql){
    DBCon();
    $res= mysql_query($sql);
    if(false === $res){
        return false;
    }
    $rez=[];
    while($row = mysql_fetch_array($res)){
        $rez[]=$row;
    }
    return $rez;
}