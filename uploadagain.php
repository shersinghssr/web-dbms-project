<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style/uploadfile.css">
    <link rel="shortcut icon" type="image/png" href="style/multimedia/favicon1.png">
    <title>Fast Torrent | Upload</title>
  </head>
  <body class="uploader">
    <header>
      <?php
      include_once 'header.php';
      ?>
    </header>
    <div class="container">
      <div class="row">
        <form action="uploadfile.php" method="post" enctype="multipart/form-data" >
        <h3>Upload Successfully!!</h3>
        <input type=button onClick=location.href='uploadfile.php' value='Upload Another!'><br>
        <input type=button onClick=location.href='searchpage.php' value='Done'>
        </form>
      </div>
    </div>
  </body>
</html>