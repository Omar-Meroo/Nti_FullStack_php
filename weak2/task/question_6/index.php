<?php
$tests=array(5,4,9,3,1,7,5,8,6);
function Maxx ($nums){
    //because if array contain nigative numbers
    $max=-99999999;

    for($i=0;$i<count($nums);$i++){
        
       if($nums[$i]>$max){
            $max=$nums[$i];
        }
        
    }
    echo"Max Number in Array is : " .$max;
}

Maxx($tests);
?>