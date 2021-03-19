<?php
/**
 * 连接数据库
 */

$dbhost = 'localhost';//定义变量保存数据库主机地址
$dbuser = 'root';//定义变量保存保存数据库用户名
$dbpass = 'root';//定义变量保存保存数据库密码
$conn = mysqli_connect($dbhost,$dbuser,$dbpass);//创建数据库连接实例
if (!$conn){//数据库连接失败处理
    die('Could not connect'. mysqli_error());
}
echo "数据库连接成功";
mysqli_close($conn);//数据库连接断开

?>