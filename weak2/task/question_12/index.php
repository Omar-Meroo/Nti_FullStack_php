<?php

session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
$price= $_POST['num1'];
$numOfpeice= $_POST['num2'];
$errors=[];
if(!is_numeric($price)|| $price <=0){
$errors[]="Price Of Product must be positive number";
}
if(!is_numeric($numOfpeice)|| $numOfpeice <= 0){
$errors[]="Number of peice must be positive number";
}
if($errors){
    $_SESSION['errors']=$errors;
    header('location:main.php');
    exit();
}

$total_price=$price*$numOfpeice;
$discount=10/100;
echo" Total price before discount is : " .$total_price ."<br>";
if($total_price>1000){
    $discount=15/100;
    echo" Total price After discount is : " .$total_price-($total_price* $discount);
}
else{
    echo" Total price After discount is : " .$total_price-($total_price* $discount);
}

}

?>