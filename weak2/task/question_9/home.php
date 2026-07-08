<?php
$tests=array(1,"tariq",1.5,true,7,'s',false);
function notbool ($arr){
    echo" Array wihout boolean : ";
    $i=0;
    while($i<count($arr)){
        if($arr[$i]==0||$arr[$i]==1){
            continue;
        }
       echo $arr[$i] ." , ";
       $i++;
    }
    
}
notbool($tests);

?>