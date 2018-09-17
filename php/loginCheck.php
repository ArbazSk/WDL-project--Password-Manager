<?php
$link=null;

$db_host = "localhost";
$db_user = "root";
$db_password = "root";
$db_name = "passmanager";

$link = mysqli_connect($db_host,$db_user,$db_password,$db_name) or die(mysqli_error($link));
if(!$link){
    echo 'Connection Error';
}
else{
    echo 'yep i done it<br>';
}

// mysqli_select_db($link,$db_name) or die(mysqli_error());
$result =  mysqli_query($link,"SELECT USER_ID,UNAME,UPHONE FROM user WHERE USER_ID=1") ;
if(!$result){
    echo mysqli_error($link);
}
$data= mysqli_fetch_array($result);
foreach($data as $value)
{
    print_r($value);
    echo '<br>';

}
// var_dump($data);

// phpinfo();


?>
