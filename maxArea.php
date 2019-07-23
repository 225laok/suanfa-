<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/19 0019
 * Time: 10:55
 * 双指针求最大面积
 */

function getMaxArea($arr)
{
    $count=count($arr);
    $l=0;
    $r=$count-1;
    $x=$count;
    $y=min($arr[$l],$arr[$r]);
    $result=$x*$y;
    while($l<$r)
    {
        if($arr[$l]<$arr[$r])
        {
            $l++;
        }else{
            $r--;
        }
        $x=$r-$l;
        $y=min($arr[$l],$arr[$r]);
        $tmp=$x*$y;
        $result=max($result,$tmp);
    }
    return $result;

}
$arr=[1,3,5,8,4,2];
echo getMaxArea($arr);