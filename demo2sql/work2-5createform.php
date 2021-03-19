<?php
/*使用Php创建数据表*/
$dbhost = "localhost";//定义变量保存数据库主机地址
$dbuser = "root";//定义变量保存数据库用户名
$dbpass = "root";//定义变量保存数据库密码

$conn = mysqli_connect($dbhost, $dbuser, $dbpass);//创建数据库连接实例
if (!$conn) {//数据库连接失败处理
    echo "数据库连接失败!" . mysqli_error(!$conn);
};
echo "数据库连接成功!<br/>";

//定义变量保存数据库查询语句,该语句用于创建runoob_tb3的数据表
$sql = "CREATE TABLE runoob_tb3(
      " . " runoob_id INT NOT NULL AUTO_INCREMENT,
      " . " runoob_title VARCHAR(100) NOT NULL,
      " . " runoob_author VARCHAR(40) NOT NULL,
      " . " submission_date DATE,
      " . " PRIMARY KEY (runoob_id))ENGINE = InnoDB DEFAULT CHARSET=utf8; ";

//通过数据库连接执行数据库选择语句,选择RUNOOB数据库
mysqli_select_db($conn,"RUNOOB");

//通过数据库连接执行数据库查询语句
$retval = mysqli_query($conn,$sql);

//判断执行数据库查询语句是否失败,失败则显示提示语
if (!$retval){
    die('数据表创建失败!\n' .mysqli_error($conn));
}
echo "数据表创建成功!\n";

//断开数据库连接
mysqli_close($conn);

?>