<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style/header.css">
<link rel="shortcut icon" type="image/png" href="style/multimedia/favicon1.png">
</head>
<body>

<div class="topnav">
  <a class="active"href="index.php"><img src="style/multimedia/favicon2.png" width="auto" height="17" title="Home" alt="Favicon"></a>
  <!--<a href="index.php">Home</a>-->
  <a href="contact.php">Contact</a>
  <a href="about.php">About</a> 
  <?php
    if (isset($_SESSION['u_id'])) {
      echo '<a href="searchpage.php">Torrents</a>';
      echo '<a href="uploadfile.php">Upload</a>';
      echo '<a href="logout.php">Logout</a>';}
  ?>
</div>
</body>
</html>