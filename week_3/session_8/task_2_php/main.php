<?php
session_start();

require 'validate.php';
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $errors=[];

    foreach($first_validates as $validate_name=>$validate_value){

 $value= filter_input(INPUT_POST,$validate_name,$validate_value['filter'],$validate_value['my_options']?? null);

if(empty($_POST[$validate_name])){
    $errors[$validate_name] = "You must fill ".$validate_name;
}
elseif($value == false){
$errors[$validate_name]= $validate_value['error'];
}


}

if($errors){
    $_SESSION['errors'] = $errors;
    header('location:account.php');
    exit();
}

$_SESSION['email'] = $email;
$_SESSION['password'] = $password;
header('location:products.php');
exit();


}
// profile
session_start();

require 'validate.php';
if(isset($_POST['Save'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $facebook=$_POST['facebook'];
    $twitter=$_POST['twitter'];
    $instagram=$_POST['instagram'];
    $perrors=[];

    foreach($validates as $validate_name=>$validate_value){

 $value= filter_input(INPUT_POST,$validate_name,$validate_value['filter'],$validate_value['my_options']?? null);

if(empty($_POST[$validate_name])){
    $perrors[$validate_name] = "You must fill ".$validate_name;
}
elseif($value == false){
$perrors[$validate_name]= $validate_value['error'];
}


}

if($perrors){
    $_SESSION['perrors'] = $perrors;
    header('location:profile.php');
    exit();
}


    $_SESSION['username']=$username;
    $_SESSION['password']=$password;
    $_SESSION['email']=$email;
    $_SESSION['phone']=$phone;
    $_SESSION['facebook']=$facebook;
    $_SESSION['twitter']=$twitter;
    $_SESSION['instagram']=$instagram;
    header('location:navbar.php');
    exit();


}




?>