<?php

$films=array("Fast","Predestination","Persuit","Prestige");
$keyword="avatar";
function Search ($arr ,$key){
    for($i=0;$i<count($arr);$i++){
        if($arr[$i]==$key){
            echo" Yes .$key in Films";
            break;
        }
        
        
    }
     echo" No $key is not in Films";
}
Search($films,$keyword);

?>