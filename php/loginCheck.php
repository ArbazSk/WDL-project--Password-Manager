<?php
session_start();
include 'functions.php';

if($_POST){
  $salt = '!@#122+_';
  $user = $_POST['username'];
  $pass = hash('sha512',$salt.$_POST['pass'].$salt);

    if(!empty($user)&&!empty($pass)){
      $userFrom_db = RetriveUsername($user);
      if($userFrom_db['M_USERNAME'] == $user && $userFrom_db['M_PASSWORD'] == $pass ){
        $_SESSION['CurrentUSER'] = $user;
        $_SESSION['M_ID'] = $userFrom_db['M_ID'];
        $_SESSION['loggedIN'] = "yes";
        header('Refresh:0 , url = ../html/sitelist.php');
      }
      else{
        echo "<script> alert('User does not exist. Create an Account '); </script>";
        header('Refresh:0 , url= ../html/signup.php');
      }
  
    }
}

?>