<?php
/**
 * Created by PhpStorm.
 * User: 黑山老妖
 * Date: 2018/11/5
 * Time: 8:52
 */
/**
 * 第一种方法使用for循环实现
 */
$a = 0;
for($i=0;$i<101;$i++){
    $a += $i;
}
echo $a;
echo "<br>";
/**
 * 第二种方法使用while循环实现
 */
$a = 0;
$b = 0;
while($b<=100){
    $a += $b;
    $b++;
}
echo $a;
echo "<br>";
/**
 * 第三种方法使用递归循环实现
 */
getFor();
function getFor($a=0,$b=0)
{
    if($a<=100){
        $b += $a;
        $c = ++$a;
        getFor($c,$b);
    }else{
        echo $b;
    }
}