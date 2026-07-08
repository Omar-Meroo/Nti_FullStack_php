
<?php
$array=[5, 3, 8, 2, 1];
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
Route_Bubble($array);
echo"Arrangement Array is:" ;
    for($i=0;$i<count($array);$i++){
        echo $array[$i]." " ;
    }

?>