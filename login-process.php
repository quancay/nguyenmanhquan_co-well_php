<?php
session_start();
if($_POST){
  if(empty($_POST['email']) ){
    if(false == filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
      $errors['email'] = $_POST['email'];
      $errors['email'] .= 'is not a vaiid email address';
      $_SESSION['errors'] = $errors;
    }
    header('location: login.php');
    exit();
  }
  else{
    // $errors['email'] ="Toang";
    // header('location: login.php');
    // exit();
  }
  if(empty($_POST['password'])){
    if(strlen($_POST == 0)){
      $errors['pwd'] = $_POST['password'];
      $errors['pwd'] .= 'ko đc trống';
      $_SESSION['errors'] = $errors;
    }
    header('location: login.php');
    exit();
  }

}
else{
    header('location: login.php');
}


?>