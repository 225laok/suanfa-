<?php
/**
你是一个专业的小偷，计划偷窃沿街的房屋。每间房内都藏有一定的现金，
 * 影响你偷窃的唯一制约因素就是相邻的房屋装有相互连通的防盗系统，
 * 如果两间相邻的房屋在同一晚上被小偷闯入，系统会自动报警。
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
/*
 * 你是一个专业的小偷，计划偷窃沿街的房屋，每间房内都藏有一定的现金。这个地方所有的房屋都围成一圈，这意味着第一个房屋和最后一个房屋是紧挨着的。
 * 同时，相邻的房屋装有相互连通的防盗系统，如果两间相邻的房屋在同一晚上被小偷闯入，系统会自动报警
 *思路：将一个环形的数组拆成从0到numsSize-2和1到numsSize-1两个子数组，那么就可以完美的避免了首尾都被选中的尴尬局面，
 * 这样问题就成了两个dp问题了最后我们记录比较两个子问题的最优解谁更优，就得出了整个大问题的全局最优解了
 */
function robber1($arr)
{
    $count=count($arr);
    if($count<2)
    {
        return 0;
    }
    $dp[0]=0;
    $dp[1]=$arr[0];
    $dp[2]=$arr[1];
    for($i=3;$i<=$count-1;$i++)
    {
        $dp[$i]=max($dp[$i-2]+$arr[$i-1],$dp[$i-1]);
    }
    $temp1=$dp[$count-1];
    print_r($dp);
    $dp[0]=0;
    $dp[1]=$arr[1];
    for($i=2;$i<=$count-1;$i++)
    {
        $dp[$i]=max($dp[$i-2]+$arr[$i],$dp[$i-1]);
    }
    $temp2=$dp[$count-1];
    print_r($dp);
    return max($temp1,$temp2);

}
$arr=[2,3,2];
echo robber1($arr);