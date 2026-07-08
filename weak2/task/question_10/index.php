<?php
$tests=array(5,4,9,3,1,7,5,8,6);
function Route_Bubble (&$arr){
    $size=count($arr);
for($i=0;$i<$size-1;$i++){
      
    for($j=0;$j<$size-$i-1;$j++)
        if($arr[$j]>$arr[$j+1]){
            $temp=$arr[$j];
            $arr[$j]=$arr[$j+1];
            $arr[$j+1]=$temp;

        }
        
    }

}
Route_Bubble($tests);
echo"Arrangement Array is:" ;
    for($i=0;$i<count($tests);$i++){
        echo $tests[$i]." " ;
    }

?>