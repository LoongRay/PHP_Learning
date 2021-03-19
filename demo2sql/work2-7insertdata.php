<?php
/*插入数据*/
//定义变量保存数据库主机地址、用户名、用户名
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "root";

//创建数据库连接实例
    $conn = mysqli_connect($dbhost,$dbuser,$dbpass);
    if(!$conn){
        die("连接失败" . mysqli_error($conn));
    }
    echo "连接成功\n";

//设置编码,防止中文乱码
    mysqli_query($conn,"set names utf8");

//定义变量保存插入数据值
    $runoob_title = "CSS";
    $runoob_author = "runoob";
    $submission_date = "2021-03-16";

//定义变量保存数据库查询语句,该语句用于表格runoob_tb3插入数据
    $sql = "INSERT INTO runoob_tb3 " .
           "(runoob_title,runoob_author,submission_date)".
           "VALUES".
           "('$runoob_title','$runoob_author','$submission_date')";

//通过数据库连接执行数据库选择语句,选择RUNOOB数据库
    mysqli_select_db($conn,"RUNOOB");

//通过数据库连接执行数据库查询语句
    $retval = mysqli_query($conn,$sql);
    if(!$retval){
        die("无法插入数据" . mysqli_error($conn));
    }
    echo "插入数据成功\n";

//断开数据库连接
    mysqli_close($conn);
?>