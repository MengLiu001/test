<?php
require 'Connect_database.php' ;
//修改用户姓名和密码
$name="张三";
$pswd="78910";
$sql="update user.name set username='$name',userpassword='$pswd' where username='ymcc'and userpassword='123456'";
$conn->query($sql);