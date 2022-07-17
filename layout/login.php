<?php
session_start();

if ($_POST)
{
    $error =[];
    if ($_POST['email']){
        if( false == filter_var($_POST['login-id'], FILTER_VALIDATE_EMAIL)){
            $error['login-id']= $_POST['login-id'];
            $error['login-id'] .= 'is not email address';
        }
    }else{
        $error['login-id'] = "login id is required";
    }
    if (!$_POST['password']){
        $error['password'] = "password is required";
    }
    if($error){
        $_SESSION['error'] = $error;
        $_SESSION['old'] = $_POST;
        header('location: log-in.php');
        exit();
    }
    
    $_SESSION['user'] = 'admin';
    header('location: /Dashboard');
    exit();
}
else{
    header('location: log-in.php');
    exit();
}
?>
