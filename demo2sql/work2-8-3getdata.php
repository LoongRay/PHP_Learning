<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2021-03-17
 * Time: 0:55
 */

//使用 MYSQLI_NUM 参数显示数据表 runoob_tbl 的所有记录:

$dbhost = 'localhost';
$dbuser = 'root';
$dbpwd = 'root';
$conn = mysqli_connect($dbhost, $dbuser, $dbpwd);
if (!$conn) {
    die("连接失败" . mysqli_error($conn));
}
//设置编码,防止中文乱码
mysqli_query($conn, "set names utf8");

$sql = 'SELECT runoob_id, runoob_title, runoob_author, submission_date FROM runoob_tb2';
mysqli_select_db($conn, "RUNOOB");
$retval = mysqli_query($conn, $sql);
if (!$retval) {
    die("获取数据错误" . mysqli_error($conn));
}

echo "<h2>MYSQLI_NUM获取数据</h2>";
echo "<table border='2' width='300'>";
echo "<tr>
    <td>序号</td>
    <td>课程</td>
    <td>作者</td>
    <td>发布时间</td>
</tr>";

while ($row = mysqli_fetch_array($retval,MYSQLI_NUM)){
    echo "
        <tr><td>{$row[0]}</td>
        <td>{$row[1]}</td>
        <td>{$row[2]}</td>
        <td>{$row[3]}</td>
        </tr>
    ";
}
echo "</table>";
mysqli_close($conn);
?>