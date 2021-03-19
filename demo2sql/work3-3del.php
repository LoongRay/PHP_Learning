<?php
/*DELETE按条件删除*/
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpwd = "root";

    $conn = mysqli_connect($dbhost,$dbuser,$dbpwd);
    if(!$conn){
        die("连接失败" .mysqli_error($conn));
    }

    //防止字符乱码,进行字符设置
    mysqli_query($conn,"set names utf8");

    //按条件删除表格runoob_tb2的记录,删除条件为runoob_id 的属性值等于 6
    $sql = "
        DELETE FROM runoob_tb2
        WHERE runoob_id = 6";
    mysqli_select_db($conn,'RUNOOB');
    $retval = mysqli_query($conn,$sql);
    if(!$retval){
        die("数据删除失败" .mysqli_error($conn));
    }

    echo "数据删除成功";
    mysqli_close($conn);
?>