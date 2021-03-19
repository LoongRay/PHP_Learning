<?php
/*Update按条件更新*/
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpwd = "root";
    $conn = mysqli_connect($dbhost,$dbuser,$dbpwd);

    if (!$conn){
         die("连接失败<br/>" .mysqli_error($conn));
    }
    //设置字符编码,防止中文乱码
    mysqli_query($conn,"set names utf8");

//按条件更新表格runoob_tb2的1条记录,更新条件为runoob_id 的属性值等于 6
    $sql = "UPDATE runoob_tb2 
             SET runoob_title='学习Python'
             WHERE runoob_id = 6";
    mysqli_select_db($conn,'RUNOOB');
    $retval = mysqli_query($conn,$sql);
    if(!$retval){
        die("数据更新失败" . mysqli_error($conn));
    }
    echo "数据更新成功!";
    mysqli_close($conn);
?>