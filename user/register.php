<?php

require 'Connect_database.php' ;
//获取当前注册时间
$time=date("Y-m-d H:i:s");
//获取当前注册ip
$ip =$_SERVER['REMOTE_ADDR'];
//查询玩家注册ID
$sqls="select max(userid)  from name ";
$uid=$conn->query($sqls);
$row = $uid->fetch_assoc();
//判断是否是第一个玩家,是以1000id开始，不是获取最后一个id加1
 $new=$row['max(userid)'];
if($new==null){
    $userid="1000";
}
//id累加
else{
$userid=++$new;
}
//添加新用户
$sql="INSERT INTO user.name VALUES('ymc','123456','$userid','$ip','$time')";


$conn->query($sql);
//var_dump($_SERVER['REMOTE_ADDR']);

//
//var_dump($_SERVER);

