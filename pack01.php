<?php
/*
 * 01背包问题
 *
 */
function pack01($w,$v,$C)
{
    $count=count($w);
    $dp=[];
    //初始化第一行
    for($j=0;$j<=$C+1;$j++)
    {
        $dp[0][$j]=($w[0]<=$j)?$v[0]:0;
    }
    //递推部分
    for($i=1;$i<$count;$i++)
    {
        for($j=0;$j<=$C;$j++)
        {
            if($j>=$w[$i])
            {
                $dp[$i][$j]=max($dp[$i-1][$j],$dp[$i-1][$j-$w[$i]]+$v[$i]);
            }else{
                $dp[$i][$j]=$dp[$i-1][$j];
            }
        }
    }
    return $dp;
}
$w=[1,3,5];
$v=[3,5,9];
$C=5;
print_r(pack01($w,$v,$C));