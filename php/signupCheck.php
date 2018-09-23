<?php
include 'functions.php';

if($_POST){
 $fullname = fix_name($_POST['fullName']);
 $Musername = fix_name($_POST['Musername']);
 $Mpassword = hash('sha512',$_POST['Mpassword']);
 $Mconpassword = hash('sha512',$_POST['Mconpassword']);
 $Memail = $_POST['Memail'];

   if(!empty($fullname)&&!empty($Musername)&&!empty($Mpassword)&&!empty($Mconpassword)&&!empty($Memail)){
     if($Mpassword != $Mconpassword){
       echo " <p>please enter coreect password</p>" ;
       header('Refresh:2, url= ../html/signup.html');
     }

   }
}

?>