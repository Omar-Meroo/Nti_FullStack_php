<?php
$arr=[4,5,9,7,3,1,2];
function summation ($nums){
    
    $result=0;
    for($i=0;$i<count($nums);$i++){
        
        $result+=$nums[$i];
    }
    echo"Summation of Array : " .$result;
}
summation($arr);

?>