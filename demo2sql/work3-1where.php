<?php
/*Where查询*/

//1)连接判断
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpwd = "root";
    $conn = mysqli_connect($dbhost,$dbuser,$dbpwd);

    if (!$conn){
        die("连接失败" . mysqli_error($conn));
    }

//2)定义查询语句
    //设置字符编码格式,防止乱码
    mysqli_query($conn,"set names utf8");

//按条件查询runoob_id..等数据,查询条件为runoob_author 的值等于 'runoob'
    $sql = "SELECT  runoob_id, runoob_title, runoob_author, submission_date
            FROM runoob_tb2
            WHERE runoob_author = 'runoob'";
    mysqli_select_db($conn,"RUNOOB");
    $retval = mysqli_query($conn,$sql);
    if(!$retval){
        die("获取数据失败" .mysqli_error($conn));
    }

    echo "<h2>数据查询WHERE子句</h2>";
    echo "<table border='2' width='300'>
            <tr>
                <td>序号</td>
                <td>课程</td>
                <td>发布者</td>
                <td>发布时间</td>
            </tr>";
    while ($row = mysqli_fetch_array($retval,MYSQLI_NUM)){
        echo "<tr>
            <td>{$row[0]}</td>
            <td>{$row[1]}</td>
            <td>{$row[2]}</td>
            <td>{$row[3]}</td>
        </tr>";
    }
    echo "</table>";
    //释放内存:mysqli_free_result
    mysqli_free_result($retval);
    mysqli_close($conn);
?>