<!DOCTYPE html>
<?php session_start(); ?>
  <head>
      <title>Add new site</title>
      <!-- <link rel="stylesheet" href="../css/style.css"/> -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  </head>
<body>
  <header>
    <div class="navbar">
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <!-- <li><a href="contact.html">Contact</a></li> -->
          <?php if($_SESSION['LoggedIN'] == "yes"): ?>
          <li><span id="loggedIn"><a href="index.php">LogOUt</a></span></li>
          <!-- <?php // $_SESSION['LoggedIN'] = "no"; session_destroy(); ?> -->
          <?php else : ?>
          <li><span id="loggedIn"><a href="login.php">LogIn</a></span></li>
          <?php endif ?>
        </ul>
      </nav>
    </div>
  </header>
  <main>
    <div class="newsite">
      <form action="../php/AddNewSiteData.php" method="POST">
        <h2>New Site Details</h2>
        <input type="text" name="Websitename" value="" placeholder="Website Name" required="required"/><br>
        <input type="url" name="url" value="" placeholder="URL" required="required"/><br>
        <input type="text" name="username" value="" placeholder="Username" required="required"/><br>
        <input type="text" name="Password" value="" placeholder="Password" required="required"/><br>
        <label>
			       <textarea id="notes" placeholder="Notes"></textarea>
		    </label><br>
        <input type="submit" value="Save">
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
