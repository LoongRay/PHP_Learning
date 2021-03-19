<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2021-03-16
 * Time: 0:15
 */
    //1并置运算符:合并字符串
    $str1 = "hello";
    $str2 = "world";
    echo $str1 ." ". $str2;
    echo '<br>';

    //2strlen() 函数:strlen() 函数返回字符串的长度（字节数）。
    echo strlen('hello');
    echo '<br>';

    //3.strpos() 函数:在字符串 "Hello world!" 中查找文本 "world".找到匹配，该函数会返回第一个匹配的字符位置。
    echo strpos("hello world","world");

?>