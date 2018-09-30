<?php
// if (isset($_SERVER['PHP_AUTH_USER']) &&
// isset($_SERVER['PHP_AUTH_PW']))
// {
//     echo "Welcome User: " . $_SERVER['PHP_AUTH_USER'] .
//     " Password: " . $_SERVER['PHP_AUTH_PW'];
// }
// else
// {
// header('WWW-Authenticate: Basic realm="Restricted Section"');
// header('HTTP/1.0 401 Unauthorized');
// die("Please enter your username and password");
// }

// Connect to MySQL
// $link = mysqli_connect('localhost', 'root', 'root');
// if (!$link) {
//     die('Could not connect: ' . mysqli_error());
// }
// $MyDB = 'PASSm';
// // Make my_db the current database
// $db_selected = mysqli_select_db($link,$MyDB);

// if (!$db_selected) {
//   // If we couldn't, then it either doesn't exist, or we can't see it.
//   $sql = "CREATE DATABASE '$MyDB'";

//   if (mysqli_query($link,$sql)) {
//       echo "Database my_db created successfully\n";
//   } else {
//       echo 'Error creating database: ' . mysqli_error($link);
//   }
// }

// mysqli_close($link);
session_start();
if(session_destroy()){
    echo "successfully destroyed";
}
else{
    echo "cannot destroyed";
}

?>