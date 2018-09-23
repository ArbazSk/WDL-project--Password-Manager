<?php
include 'functions.php';
// echo $_POST['username'];
// echo '<br>';
// echo $_POST['pass'];
// echo '<br>';

if($_POST){
 $user = $_POST['username'];
 $pass = $_POST['pass'];

   if(!empty($user)&&!empty($pass)){
    // $query="Select * From user" ;
    $result =  MyquerySelect($query);

   }
}

?>