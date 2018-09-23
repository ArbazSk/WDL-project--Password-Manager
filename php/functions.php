<?php

$link=null;
function connect_db(){
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "root";
    $db_name = "passmanager";
    global $link;
    $link = mysqli_connect($db_host,$db_user,$db_password,$db_name) or die(mysqli_error($link));

    // mysqli_select_db($link,$db_name) or die(mysqli_error($link));
}
function close_db(){
  global $link;
  mysqli_close($link);
}

function MyquerySelect($query){
    connect_db();
    global $link;
    $result = mysqli_query($link,$query);
    if(!$result){
        echo 'Somthing went wrong '.'<br>'.mysqli_error($link);
        die();
    }
    mysqli_close($link);
    return $result;
}

function fix_name($name){
	$name=trim($name);
	$name=ucfirst($name);
	return $name;
} 


?>
