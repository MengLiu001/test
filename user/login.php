<?php
require 'Connect_database.php' ;
$sql="select * from  user.name  ";
$result=$conn->query($sql);
if ($result->num_rows > 0) {
   $row = $result->fetch_assoc();
   
   if($row["username"]=="ymcn"&& $row["userpassword"]=="123456"){
     echo "恭喜登录成功";
        $uids=$row["userid"];
       //获取当前登录时间
      $time=date("Y-m-d H:i:s");
      //获取当前登录ip
      $ip =$_SERVER['REMOTE_ADDR'];
      $sqls="insert into user.log VALUES('$ip','$uids','$time')";
      $conn->query($sqls);


   }
   else{

    echo "用户输入信息错误";
}

}
