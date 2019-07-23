<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/18 0018
 * Time: 10:21
 */
//$arr=str_split(trim(fgets(STDIN)));
//$arr=array_unique($arr);
//$count=count($arr);
//if($count>2)
//{
//    echo 0;
//}else{
//    echo "$count";
//}
 $count=trim(fgets(STDIN));
 $arr=explode(' ',trim(fgets(STDIN)));
 sort($arr);
 $d=$arr[1]-$arr[0];
 for($i=2;$i<$count;$i++)
 {
     if(($arr[$i]-$arr[$i-1])==$d)
     {
         continue;
     }else{
         echo 'Impossible';
     }
 }
 echo 'possible';