<?php
/*获取数据*/

//定义变量保存数据库主机地址、用户名、用户名
$dbhost = "localhost";
$user = "root";
$pass = "root";

//创建数据库连接实例
$conn = mysqli_connect($dbhost, $user, $pass);
if (!$conn) {
    die("连接失败<br/>" . mysqli_error($conn));
};

//设置编码,防止中文乱码
mysqli_query($conn, "set names utf8");

//定义变量保存数据库查询语句,该语句用于表格runoob_tb2读取数据,读取数据字段有runoob_id.....
$sql = 'SELECT runoob_id,runoob_title,runoob_author,submission_date from runoob_tb2';

//通过数据库连接执行数据库选择语句,选择RUNOOB数据库
mysqli_select_db($conn, 'RUNOOB');

$retval = mysqli_query($conn, $sql);//执行数据查询语句
if (!$retval) {
    die("无法读取数据<br/>" . mysqli_error($conn));
};

echo "<h2>读取数据测试</h2>";
echo "<table border='1' width='300px'>
        <tr>
            <td>序号</td>
            <td>课程名</td>
            <td>作者</td>
            <td>发布日期</td> 
        </tr>";

/*
*PHP 函数 mysqli_fetch_array() 来使用或输出所有查询的数据。
*mysqli_fetch_array() 函数从结果集中取得一行作为关联数组，或
*数字数组，或二者兼有 返回根据从结果集取得的行生成的数组，如果没有更多行则返回 false。
*/
while ($row = mysqli_fetch_array($retval,MYSQLI_ASSOC)) {//MYSQLI_ASSOC指返回结果
    //满足条件:以表格方式渲染读取到的数据
    echo "<tr><td>{$row['runoob_id']}</td>" .
        "<td>{$row['runoob_title']}</td>" .
        "<td>{$row['runoob_author']}</td>" .
        "<td>{$row['submission_date']}</td>" ;
}
echo "</table>";
//断开连接
mysqli_close($conn);
?>