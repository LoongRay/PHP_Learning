<?php
/**
 * 删除数据库表
 */

//定义变量保存数据库主机地址、用户名、用户名
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";

//创建数据库连接实例
$conn = mysqli_connect($dbhost,$dbpass,$dbpass);
if(!$conn){
    die("连接失败" . mysqli_error($conn));
}
echo "连接成功\n";

//定义变量保存数据库查询语句,该语句用于删除runoob_tb1的数据表
$sql = "DROP TABLE runoob_tb1";

//通过数据库连接执行数据库选择语句,选择RUNOOB数据库
mysqli_select_db($conn,'RUNOOB');

//通过数据库连接执行数据库查询语句
$retval = mysqli_query($conn,$sql);
if(!$retval){
    die("删除数据表失败\n" . mysqli_error($conn));
}

echo "删除数据表成功";

//断开数据库连接
mysqli_close($conn);



?>