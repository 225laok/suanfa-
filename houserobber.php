<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/16 0016
 * Time: 19:47
 */
function  robber($arr)
{
    $count=count($arr);
    if($count==0){
        return 0;
    }
    $dp=[];
    $dp[0]=0;
    $dp[1]=$arr[0];
    $dp[2]=$arr[1];
    for($i=3;$i<=$count;$i++)
    {
        $dp[$i]=max($dp[$i-2]+$arr[$i-1],$dp[$i-1]);
    }
    return $dp[$count];
}
$arr=[3,3,2,8];
echo robber($arr);