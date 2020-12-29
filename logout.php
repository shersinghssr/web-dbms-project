<?php
?>
<html> 
<link rel="shortcut icon" type="image/png" href="style/multimedia/favicon1.png">
  <head>   
  <style>
    .button1 {
      height: 30px;
      color: #fff;
      font-size: 15px;
      background: red;
      cursor: pointer;
      border-radius: 25px;
      border: none;
      outline: none;
      margin-left: 50%;}
      .button2 {
      height: 30px;
      color: #fff;
      font-size: 15px;
      background: red;
      cursor: pointer;
      border-radius: 25px;
      border: none;
      outline: none;
      margin-left: 50%;
      padding-left: 10px;
      padding-right: 10px;}
      .header{
        margin-left: 40%;
        margin-top: 10%;
        font-family: sans-serif;
      }
  </style>
  </head>  
  <form action="includes/logout.inc.php" method="POST">
    <h2 class="header">Are you sure you want to logout?</h2>
    <button class="button1" type="submit" name ="submit">Yes</button>
  </form>
  <form action="index.php">
  <button class="button2"><a href="index.php"></a>No</button>
  </form>
</html>

