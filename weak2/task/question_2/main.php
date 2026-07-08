<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
    $num_1= $_POST['num1'];
    $num_2= $_POST['num2'];

    function calculation($n1,$n2){
        echo"Summation of numbers : ". $n1+$n2 ."<br> ";
        echo"Substarction of numbers :". $n1-$n2 ."<br> ";
        echo"Maltiplication of numbers :". $n1*$n2. "<br> ";
        echo"Division of numbers : ".$n1/$n2 ." <br> ";
    }
    calculation($num_1,$num_2);
}

?>