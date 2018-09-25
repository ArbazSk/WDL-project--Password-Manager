<!DOCTYPE html>
<?php session_start(); ?>
<head>
  <title>Your List</title>
  <link rel="stylesheet" href="../css/style.css"/>
  <!-- <link rel="stylesheet" href="/css/style.css"/> -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>
  <header>
    <div class="navbar">
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <!-- <li><a href="contact.html">Contact</a></li> -->
          <?php if($_SESSION['LoggedIN'] == "yes"): ?>
          <li><span id="loggedIn"><a href="login.php">LogOUt</a></span></li>
          <!-- <?php //$_SESSION['LoggedIN'] = "no"; session_destroy(); ?> -->
          <?php else : ?>
          <li><span id="loggedIn"><a href="login.php">LogIn</a></span></li>
          <?php endif ?>
        </ul>
      </nav>
    </div>
  </header>
  <main>
      <h2>Sites</h2>
    <div class="list">
      <form action="newsite.html">
        <input type="submit"  value="+ Add New"><br>
        <input type="search" placeholder="search my list">
        <input id="searchbtn" type="submit" value="Search"><br>
      </form>
      <div class="content">
        <div id="name"><?php echo $_SESSION['LoggedIN'] ?></div>
        <div id="website"></div>
        <div id="url"></div>
        <div id="username"></div>
        <div id="password"></div>
      </div>
    </div>
  </main>
  <footer>
    <div>
        <p>2018 &copy; All Rights Reserved</p>
    </div>
  </footer>
</body>
</html>
