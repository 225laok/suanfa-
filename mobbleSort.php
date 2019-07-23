<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/23 0023
 * Time: 10:49
 */
//冒泡排序
function mobbleSort($arr)
{
    $count=count($arr);
    $flag=true;
    for($i=0;$i<$count && $flag;$i++)
    {
        $flag=false;
        for($j=$count-2;$j>=$i;$j--)
        {
            if($arr[$j]>$arr[$j+1])
            {
                $tmp=$arr[$j];
                $arr[$j]=$arr[$j+1];
                $arr[$j+1]=$tmp;
                $flag=true;
            }
        }
    }
    return $arr;
}
//简单选择
function selectSort($arr)
{

}
$arr=[10,5,47,69,245,56,75];
print_r(mobbleSort($arr));
