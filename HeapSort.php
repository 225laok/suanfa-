<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/23 0023
 * Time: 18:53
 */
//堆排序
function swap(&$arr,$i,$j)
{
    $tmp=$arr[$i];
    $arr[$i]=$arr[$j];
    $arr[$j]=$tmp;
}
function heapSort(&$arr)
{
    $count=count($arr);
    //构建大根堆
    for($i=floor(($count-1)/2);$i>=0;$i--)
    {
        //echo $i;
        adjust($arr,$i,$count);
    }
    //堆排序
    for($i=$count-1;$i>=0;$i--)
    {
        swap($arr,0,$i);
        adjust($arr,0,$i-1);
    }
    return $arr;

}
function adjust(&$arr,$i,$count)
{
    $tmp=$arr[$i];
    for($j=(2*$i)+1;$j<=$count;$j=(2*$j)+1)
    {
        if($j<$count && $arr[$j]<$arr[$j+1])
        {
            $j++;
        }
        if($tmp>$arr[$j])
        {
            break;
        }
        $arr[$i]=$arr[$j];
        $i=$j;
    }
    $arr[$i]=$tmp;
}
$arr=[5,8,1,7,3,4,6,9,10];
print_r(heapSort($arr));