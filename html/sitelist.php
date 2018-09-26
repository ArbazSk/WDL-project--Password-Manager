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
          <?php if(array_key_exists('userLoggedin',$_POST)){ ?>
                <?php  if($_SESSION['LoggedIN'] = "yes"){           //echo $_SESSION['LoggedIN']; ?>
                  <li><span><a href="login.php">LogOUt</a></span></li>
                <?php }else{ ?>
                <?php //echo $_SESSION['LoggedIN']; ?>
                <li><span><a href="login.php">LogIn</a></span></li>
                <?php } ?>
                <?php }else{ ?>
            <li><span><a href="login.php">LogIn</a></span></li>
          <?php }?>
        </ul>
      </nav>
    </div>
  </header>
  <main>
      <h2>Sites</h2>
    <div class="list">
      <form action="newsite.php">
        <input type="submit"  value="+ Add New"><br>
        <input type="search" placeholder="search my list">
        <input id="searchbtn" type="submit" value="Search"><br>
      </form>
      <div class="content">
        <div id="name"><?php echo  $_SESSION['CurrentUSER']; ?></div>
        <div id="website"><?php echo  $_SESSION['LoggedIN']; ?></div>
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
