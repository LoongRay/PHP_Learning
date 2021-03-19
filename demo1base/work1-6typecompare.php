<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2021-03-15
 * Time: 23:51
 */
if(43 == "43"){
    echo "值相等";
}else{
    echo "值不相等";
}
echo '<br/>';

if(43 === '43'){
    echo "类型相等";
}else{
    echo "类型不同";
}
echo '<br/>';

echo '0 == false: ';
var_dump(0 == false);
echo '<br/>';

$res = '0 === false';
var_dump($res);//只会打印字符串
echo '<br/>';
var_dump(0 === false);
?>