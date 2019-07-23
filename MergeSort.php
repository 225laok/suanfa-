<?php
/**
 * Created by PhpStorm.
 * User: DIG-项目部-010
 * Date: 2019/7/23
 * Time: 22:36
 */
//归并排序
function mergeSort(&$arr)
{
    $start=0;
    $end=count($arr)-1;
    Msort($arr,$start,$end);
}
function Msort(&$arr,$start,$end)
{
    $mid=floor(($start+$end)/2);
    if($start<$end)
    {
        Msort($arr,$start,$mid);
        Msort($arr,$mid+1,$end);
        Merge($arr,$start,$mid,$end);
    }
}
function Merge(&$arr,$start,$mid,$end)
{
    $i=$start;
    $j=$mid+1;
    $k=$start;
    while($i!=$mid+1 &&$j!=$end+1)
    {
        if($arr[$i]>=$arr[$j])
        {
            $tmp[$k++]=$arr[$j++];
        }else{
            $tmp[$k++]=$arr[$i++];
        }
    }
    while($i!=$mid+1)
    {
        $tmp[$k++]=$arr[$i++];
    }
    while($j!=$end+1)
    {
        $tmp[$k++]=$arr[$j++];
    }
    foreach($tmp as $k=>$v)
    {
        $arr[$k]=$v;
    }

}
$arr=[25,36,12,10,5,48,46,7,1];
mergeSort($arr);
print_r($arr);