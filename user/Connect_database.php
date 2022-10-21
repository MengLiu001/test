<?php

// var_dump(__FILE__);

// phpinfo();

$servername = "localhost";
$username = "test";
$password = "test";
$dbname = 'user';
 
try {
    // $conn = new \PDO("mysql:host=$servername;", $username, $password);
    // echo "连接成功"; 
    // 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
    echo "连接";
  

} 
}
catch(PDOException $e)
{
    echo $e->getMessage();
    echo "连接成功";
}