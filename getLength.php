<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/18 0018
 * Time: 11:12
 */
/*如果一个01串任意两个相邻位置的字符都是不一样的,我们就叫这个01串为交错01串。例如: "1","10101","0101010"都是交错01串。
小易现在有一个01串s,小易想找出一个最长的连续子串,并且这个子串是一个交错01串。小易需要你帮帮忙求出最长的这样的子串的长度是多少。*/
function getLength($arr)
{
    $count=count($arr);
    if($count==0)
    {
        return 0;
    }
    if($count==1)
    {
        return 1;
    }
    if($count==2)
    {
        if($arr[0]==$arr[1])
        {
            return 1;
        }else{
            return 2;
        }
    }
    $s=1;
    for($i=0;$i<$count-1;$i++)
    {
        if($arr[$i]!=$arr[$i+1])
        {
            $s++;
            if(($i+1)==$count-1)
            {
                $res[]=$s;
            }
        }else{
            $res[]=$s;
            $s=1;
        }
    }
    $max=max($res);
    return $max;
}
//$arr=str_split(trim(fgets(STDIN)),1);
//echo getLength($arr);
function arrSum($arr)
{
    $k=[];
    foreach ($arr as $v) {
        if (array_key_exists($v, $k) && $k[$v] < 2) {
            $k[$v]+=1;

        } else if(array_key_exists($v, $k) && $k[$v] = 2){
            continue;
        }else{
            $k[$v] = 1;
        }
    }
 return $k;
   // return array_sum($k);
}
$arr=[1,1,1,2,2,3];
print_r(arrSum($arr));