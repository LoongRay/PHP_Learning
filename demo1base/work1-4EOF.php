<?php
/*
*PHP EOF(heredoc)是一种在命令行shell（如sh、csh、ksh、bash、PowerShell和zsh）和
*程序语言（像Perl、PHP、Python和Ruby）里定义一个字符串的方法。
 * 类比:JavaScript中的模板字符串
 */
echo <<<EOF
    <h1>标题</h1>
    <p>段落</p>
EOF;
// 结束需要独立一行且前后不能空格,前后不能有内容

$name = "runoob";
$a = <<<EOF
        字符串内容$name<br/>
        123
EOF;
echo $a;

/*
 * 开始标记和结束标记相同，比如常用大写的 EOT、EOD、EOF 来表示，
 * 但是不只限于那几个(也可以用：JSON、HTML等)，只要保证开始标记和
 * 结束标记不在正文中出现即可。
  */
$b = <<<div
    块级内容
div;
echo $b;


?>