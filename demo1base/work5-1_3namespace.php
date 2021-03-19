<?php
    //2.子命名空间
        namespace Myproject\Sub\level; //声明分层次的单个命名空间

        const CONNECT_OK = 1;//创建了常量 MyProject\Sub\Level\CONNECT_OK
        class Connection { /* ... */ }//类 MyProject\Sub\Level\Connection
        function Connect() { /* ... */  }//函数 MyProject\Sub\Level\Connect。

    //3.命名空间使用(详见file1.php 和 file2.php)


?>