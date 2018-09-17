<?php

$link=null;
function connect_db(){
    $db_host = "localhost";
    $db_user = "";
    $db_password = "";
    $db_name = "passmanager";
    global $link;
    $link = mysqli_connect($db_host,$db_user,$db_password) or die(mysqli_error());

    mysqli_select_db($link,$db_name) or die(mysqli_error());
}

function MyquerySelect($query){
    connect_db();
    global $link;
    $result = mysqli_query($link,$query);
    if(!$result){
        echo 'Somthing went wrong '.mysqli_error($link);
        die();
    }
    mysqli_close();
    return $result;
}


?>
