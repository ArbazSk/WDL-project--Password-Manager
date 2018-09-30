<?php session_start(); ?>
<?php require_once '../php/functions.php'; ?>
<!DOCTYPE html>
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
          <?php if(array_key_exists('logIN',$_SESSION)){ ?>
                <?php  if($_SESSION['logIN'] == "yes"){           //echo $_SESSION['LoggedIN']; ?>
                  <li><span><a href="index.php"><input type="button" value="out" onclick="destroy_session_and_data()" >  LogOUt</a></span></li>
                  <!-- <li><span><button type="button" value="LogOUT" onclick="destroy_session_and_data()" formaction="index.php"></button></span></li> -->
                <?php }else{ ?>
                <?php //echo "in nav bar".$_SESSION['LogIN']; ?>
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
      <form action="newsite.php" method>
        <input type="submit"  value="+ Add New"><br>
        <input type="search" placeholder="search my list">
        <input id="searchbtn" type="button" value="Search"><br>
      </form>
      <div class="content">
        <!-- <div id="name"><?php //echo  $_SESSION['CurrentUSER']; ?></div>
        <div id="website"><?php // print_r($_SESSION['LogIN']); ?></div>
        <div id="url"></div>
        <div id="username"><?php //echo  $_SESSION['M_ID']; ?></div>
        <div id="password"></div> -->

       <?php $result = RetriveUserdata(1) ; //$_SESSION['M_ID'] ?> 
       <?php while($row = mysqli_fetch_array($result)): ?>
          <div id="username"><?php echo $row['USERNAME']; ?></div>
          <div id="password"><?php echo $row['PASSWORD']; ?></div>
          <div id="website"><?php echo $row['WEBSITE_NAME']; ?></div>
          <div id="url"><?php echo $row['WEBSITE_URL']; ?></div>
        <?php endwhile;?>
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
