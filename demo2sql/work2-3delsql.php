<?php
/**
 *
 */

$dbhost = "localhost";//定义变量保存数据库主机地址
$dbuser = "root";//定义变量保存数据库用户名
$dbpass = "root";//定义变量保存数据库用户密码

$conn = mysqli_connect($dbhost,$dbuser,$dbpass);//创建数据库连接实例
if(!$conn){//数据库连接失败处理
    die('连接失败' . mysqli_error($conn));
}

echo "连接成功!<br/>";

$sql = 'DROP DATABASE RUNOOB';//定义变量保存数据库查询语句,该语句用于删除RUNOOB的数据库
$retval = mysqli_query($conn , $sql);//通过数据库连接执行数据库查询语句
if(!$retval){//判断执行数据库查询语句是否失败,失败则显示提示语
    die('删除数据库失败' . mysqli_error($conn));
}

echo "数据库Runoob删除成功!\n";
mysqli_close($conn);//断开数据库连接

?>