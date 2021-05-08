<?php
 function checkMin($arr){
     $min = $arr[0];
     $index = 0;
     for($i=1;$i<count($arr);$i++){
         if($min > $arr[$i]){
             $min = $arr[$i];
         }
     } $index = $min;
     echo $index;
 }
 $arr = [12,41,23,3,4,24,21,6];
 checkMin($arr);
