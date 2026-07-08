<?php
$arr1=array('a','b','c','d');
$arr2=array('c','d','e','f');
echo "the intersection between two array is:{ ";
for($i=0; $i<count($arr1);$i++){
    for($j=0; $j<count($arr1);$j++){
        if($arr1[$i]==$arr2[$j]){
            echo $arr1[$i] ." , ";
        }
    }
}
echo" }";
?>