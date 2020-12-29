<?php  
    session_start();
    
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fast Torrent | Sign In</title>
    <link rel="stylesheet" href="style/signin.css">
    <link rel="shortcut icon" type="image/png" href="style/multimedia/favicon1.png">
</head>
<body>
    <div class="contact-form">
        <img src="style/multimedia/lo.png" class="avatar">
        <link rel="stylesheet" href="style.css">
        <h2>SIGN IN</h2>
        <form action="includes/login.inc.php" method="POST">
            <p>Username</p>
            <input type="text" name="uid" placeholder="Enter Username"  required>
            <p>Password</p>
            <input type="password" name="pwd" placeholder="Enter Password" required>
            <input type="submit" name="submit" value="Sign In">
        </form>
            <input type="button" onClick="location.href='signup.php'" value='Sign Up'>
            <p><input type="checkbox">Remember Me</p>
    </div>
</body>
</html>