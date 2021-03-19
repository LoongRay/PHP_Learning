<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2021-03-17
 * Time: 18:33
 */
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if (!$conn) {
    die("连接失败" . mysqli_error($conn));
}

//字符编码设置,防止乱码
mysqli_query($conn, "set names utf8");

//从runoob_tb2表格查询runoob_id,runoob_title...等属性值,查询结果按照submission_date字段升序排序

$sql = "select runoob_id,runoob_title,runoob_author,submission_date
        from runoob_tb2
        order by submission_date asc";

//访问数据库RUNOOB
mysqli_select_db($conn, 'RUNOOB');
//在数据库执行查询
$retval = mysqli_query($conn, $sql);
//查询不成功
if (!$retval) {
    die('数据获取失败' . mysqli_error($conn));
}

echo "<h2>orderby数据排序</h2>";
echo "<table BORDER='1' WIDTH='300PX'>
              <tr>
                <td>序号</td>
                <td>课程</td>
                <td>发布者</td>
                <td>发布时间</td>
              </tr>";
while ($row = mysqli_fetch_array($retval,MYSQLI_ASSOC)){
    echo "
        <tr>
            <td>{$row['runoob_id']}</td>
            <td>{$row['runoob_title']}</td>
            <td>{$row['runoob_author']}</td>
            <td>{$row['submission_date']}</td>
        </tr>
    ";
}
echo "</table>";
mysqli_close($conn);
?>