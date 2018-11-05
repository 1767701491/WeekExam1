<?php
/**
 * Created by PhpStorm.
 * User: 黑山老妖
 * Date: 2018/11/5
 * Time: 9:42
 */
echo three(123221);






function three($str)
{
    $len=strlen($str);
    $l=1;
    $k=intval($len/2)+1;
    for($j=0;$j<$k;$j++){
        if (substr($str,$j,1)!=substr($str,$len-$j-1,1))
        {
            $l=0;
            break;
        }
    }
    if ($l==1)
    {
        return 1;
    }
    else
    {
        return -1;
    }
}