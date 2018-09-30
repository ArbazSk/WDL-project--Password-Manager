
// <!-- ///////////////////////////////////////////////// -->
// <!DOCTYPE html>
// <?php
// session_start();
// ?>
// <html>
// <head>
//   <title>Your List</title>
//   <link rel="stylesheet" href="../css/style.css"/>
//   <!-- <link rel="stylesheet" href="/css/style.css"/> -->
//   <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
// </head>
// <body>
//   <header>
//     <div class="navbar">
//       <nav>
//         <ul>
//           <li><a href="index.html">Home</a></li>
//           <!-- <li><a href="contact.html">Contact</a></li> -->
//           <li><a href="login.html">LogIn</a></li>
//         </ul>
//       </nav>
//     </div>
//   </header>
//   <main>
//   <?php
//             if($_POST){
//                 if($_POST['logout']=="yes"){
//                     session_destroy();
//                 }
//             }
//     ?>
//       <h2>Sites</h2>
//     <div class="list">
//       <form action="newsite.html">
//         <input type="submit"  value="+ Add New"><br>
//         <input type="search" placeholder="search my list">
//         <input id="searchbtn" type="submit" value="Search"><br>
//       </form>
//       <div class="content">
//         <?php echo $_SESSION['LoggedIN']; ?>
//       </div>
//     </div>
//   </main>
//   <footer>
//     <div>
//         <p>2018 &copy; All Rights Reserved</p>
//     </div>
//   </footer>
// </body>
// </html>
<?php

echo phpinfo();
?>