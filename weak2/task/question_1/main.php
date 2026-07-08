<?php

session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
$age =(int) $_POST['Age'];
$errors=[];

if($age<18){
    $errors[]= "Your Age Must Be Biger than or equal 18";
}

if($errors){
    $_SESSION['errors']=$errors;
    header('location:index.php');
    exit();
}

    $_SESSION['age']=$age;
header('location:welcome.php');

    

 
}

?>