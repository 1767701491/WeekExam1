<?php
/**
 * Created by PhpStorm.
 * User: 黑山老妖
 * Date: 2018/11/5
 * Time: 9:09
 */
var_dump(setFor(10));
echo "<br>";
getFor(10);
/**
 * @param $a 要算阶乘的整数
 * @return mixed
 * 递归实现阶乘
 */
function setFor($a)
{
    if($a > 1)
    {
        $r=$a*setFor($a-1);
    }else
    {
        $r=$a;
    }
    return $r;
}

/**
 * @param $a 要算阶乘的整数
 * 循环实现阶乘
 */
function getFor($a)
{
    $b = $a;
    while($a>1){
        $c = $b*($a-1);
        $b = $c;
        $a--;
    }
    echo $c;
}
