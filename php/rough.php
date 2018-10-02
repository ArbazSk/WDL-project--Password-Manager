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
// session_start();
// if(session_destroy()){
//     echo "successfully destroyed";
// }
// else{
//     echo "cannot destroyed";
// }
// echo "1a023ad5086a6ff19b2ee1423e11f288ce269a63c3f242cce9508597e79abf87adec203195833a6586af89e29f1f25db996cfd6eac636351d1986471c2104086 ".'<br>';
// $salt ='!@#122+_';
// echo hash('sha512',$salt.'rehan123'.$salt);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<form method="POST">
  <input type="submit" name="submit" formaction="rough.php"   value="+ Add New"><br>
</form>
<?php
  if(isset($_POST['submit'])){
  echo "it right";
}
else {
  echo "not right";
}
?>
</body>
</html>



//<?php
          // if($_GET){
          //   $ser = trim(strip_tags(strtolower($_GET['search'])));
          //    $searchData = SearchFromData($ser,$_SESSION['M_ID']);
          //    print_r($searchData).'<br>'.$_GET['search'];
          // }
?>