<!DOCTYPE html>
<?php session_start(); ?>
  <head>
      <title>Log In-Password Manager</title>
      <link rel="stylesheet" href="../css/style.css"/>
      <!-- <link rel="stylesheet" href="/css/style.css"/> -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  </head>
<body>
  <header>
    <div class="navbar">
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <?php  if(array_key_exists('userLoggedin',$_POST)): ?>
              <?php if($_SESSION['LoggedIN'] == "yes"): //echo $_SESSION['LoggedIN']; ?>
              <li><span ><a href="login.php">LogOUt</a></span></li>
              <?php else : ?>
              <li><span><a href="login.php">LogIn</a></span></li>
              <?php endif; ?>
            <?php else: ?>
              <li><span><a href="login.php">LogIn</a></span></li>
              <?php endif; ?>
        </ul>
      </nav>
    </div>
  </header>
  <main>
    <div class="login">
      <form action="../php/loginCheck.php" method="POST">
        <h2><i class="fas fa-key"></i>  Password Manager</h2>
        <input type="text" value="" name="username" minlength="5" placeholder="Username" required="required"/><br>
        <input type="password" value="" name="pass" minlength="5" placeholder="Password" required="required"/><br>
        <input type="submit" value="Login">
        <input type="hidden" name="userLoggedin" value="no">
        <p>Don't have an Account yet?</p>
        <a href="signup.php">Sign Up</a>
      </form>
    </div>
  </main>
  <footer>
    <div class="copyright">
		   <p>2018 &copy; All Rights Reserved</p>
    </div>
  </footer>
</body>
</html>
