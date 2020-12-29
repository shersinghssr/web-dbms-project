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
        <form action="filesLogic.php" method="post" enctype="multipart/form-data" >
        <h3>Category</h3>
            <select name="category">
                <option value="movies" selected>Movies</option>
                <option value="software">Software</option>
                <option value="games">Games</option>
                <option value="music">Music</option>
                <option value="books">Books</option>
              </select>
            <h3>Name</h3>
            <input type="text" name="title" placeholder="Enter Torrent Name" required><br>
            <h3>File Size</h3>
            <input type="text" name="filesize" placeholder="100 MB/GB" required><br>
          <h3>Upload File</h3>
          <input class = "file" type="file" name="myfile" required> <br>
          <button type="submit" name="save">Upload</button>
        </form>
      </div>
    </div>
  </body>
</html>