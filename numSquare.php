<?php

/*平方数个数问题
状态转移方程
dp[n] = Min{ dp[n - i*i] + 1 },  n - i*i >=0 && i >= 1
*/
function num_square($n)
{
     static $meom=[];
    $meom[0]=0;
    for($j=1;$j<=$n;$j++)
    {
        $meom[$j]=1000;
        for($k=1;$k*$k<=$j;$k++)
        {
            $meom[$j]=min($meom[$j],$meom[$j-($k*$k)]+1);
           // print_r($meom[$j-($k*$k)]+1);
        }
    }
    return $meom;
}
print_r(num_square(12));