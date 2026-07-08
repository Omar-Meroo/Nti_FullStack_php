<?php
$tests=array(1,"tariq",1.5,true,7,'s',false);
function notbool ($arr){
    echo" Array wihout boolean : ";
    for($i=0;$i<count($arr);$i++){
        if($arr[$i]==0||$arr[$i]==1){
            continue;
        }
       echo $arr[$i] ." , ";
    }
    
}
notbool($tests);

?>