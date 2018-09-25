<?php
session_start();
include 'functions.php';

if($_POST){
    $Websitename = $_POST['Websitename'];
    $url = $_POST['url'];
    $username = $_POST['username'];
    $password = $_POST['Password'];
  
    if(!empty($Websitename)&&!empty($url)&&!empty($username)&&!empty($password)){
        if($_SESSION['loggedIN']== "yes"){
            $query = "Insert into  site_account((USERNAME,PASSWORD,WEBSITE_NAME,WEBSITE_URL,M_ID)) values('$username','$password','$Websitename','$url','$_SESSION['M_ID']')";
            $result = MyquerySelect($query);
            if($result) echo "successfully inserted"; else echo "Error occured".mysqli_error();
            header('Refresh:1 , url = ../html/sitelist.php');
        }
        else{
            echo "NOT Logged IN";
        }
    }
    esle{

    }
}






?>