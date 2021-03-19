<?php
/*获取数据(2)*/

//定义变量保存数据库主机地址、用户名、用户名
    $host = 'localhost';
    $user = 'root';
    $pwd = "root";

//创建数据库连接实例
    $conn = mysqli_connect($host,$user,$pwd);
    if (!$conn){
        die("连接失败" .mysqli_error($conn));
    };

    //设置编码,防止乱码
    mysqli_query($conn,"set names utf8");

//定义变量保存数据库查询语句,该语句用于表格runoob_tb2读取数据,读取数据字段有runoob_id.....
    $sql = "SELECT  runoob_id, runoob_title, runoob_author, submission_date FROM runoob_tb2";

//通过数据库连接执行数据库选择语句,选择RUNOOB数据库
    mysqli_select_db($conn,'RUNOOB');

//执行数据查询语句
    $retval = mysqli_query($conn,$sql);
    if(!$retval){
        die("读取数据失败" .mysqli_error($conn));
    }
    echo "<h2>读取数据测试</h2>";
    echo "<table border='1' width='300px'>
        <tr><td>编号</td><td>课程</td><td>作者</td><td>发布时间</td>";

    while ($row = mysqli_fetch_assoc($retval)){
        //满足条件:以表格方式渲染读取到的数据
        echo "<tr><td>{$row['runoob_id']}</td>".
            "<td>{$row['runoob_title']}</td>".
            "<td>{$row['runoob_author']}</td>".
            "<td>{$row['submission_date']}</td>".
            "</tr>";
    }
    echo "</table>";
    mysqli_close($conn);
?>