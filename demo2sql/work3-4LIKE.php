<?php
/*Like相似匹配*/
$dbhost = "localhost";
$dbuser = "root";
$dbpwd = "root";

$conn = mysqli_connect($dbhost, $dbuser, $dbpwd);
if (!$conn) {
    die("连接失败" . mysqli_error($conn));
}

//字符编码格式
mysqli_query($conn, "set names utf8");

//匹配查询runoob_author属性值,查询要求为值的后缀为oob
$sql = "
                SELECT runoob_id, runoob_title, runoob_author, submission_date
                FROM runoob_tb2
                WHERE runoob_author LIKE '%oob'
            ";

mysqli_select_db($conn, 'RUNOOB');
$retval = mysqli_query($conn, $sql);
if (!$retval) {
    die("数据获取失败" . mysqli_error($conn));
}

echo '<h2>LIKE语句</h2>';
echo '<table width="300" border="1">
        <tr>
            <td>序号</td>
            <td>课程</td>
            <td>发布者</td>
            <td>发布时间</td>
        </tr>
      ';
while ($row = mysqli_fetch_array($retval,MYSQLI_ASSOC)){
    echo "
        <tr>
            <td>{$row['runoob_id']}</td>
            <td>{$row['runoob_title']}</td>
            <td>{$row['runoob_author']}</td>
            <td>{$row['submission_date']}</td>
        </tr>";
};
echo "</table>";
mysqli_close($conn);
?>