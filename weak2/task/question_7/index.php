<?php
$films=array("avatar","Prestige","avatar","Prestige");
$keyword="avatar";
function counter ($films,$key){
    $result=0;
    for($i=0;$i<count($films);$i++){
        if($films[$i]==$key){
            $result++;
        }
    }
    echo $key ."existing in films : " .$result  ." times";
}
 counter ($films,$keyword);

?>