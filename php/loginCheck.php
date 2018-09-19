<?php
require_once 'functions.php';

$usr = $_POST['username'];
$pass = $_POST['pass'];
$query = "SELECT * FROM master_account WHERE M_USERNAME = $usr AND M_PASSWORD = $pass";
$result = MyquerySelect($query);
if(!$result){
  echo "No Valid User.";
}
var_dump($result);
?>
