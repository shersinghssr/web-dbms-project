<?php  
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fast Torrent | Sign Up</title>
    <link rel="stylesheet" href="style/signup.css">
    <link rel="shortcut icon" type="image/png" href="style/multimedia/favicon1.png">
</head>
<body>
    <div class="contact-form">
        <img src="style/multimedia/lo.png" class="avatar">
        <link rel="stylesheet" href="style.css">
        <h2>SIGN UP</h2>
        <form action="includes/signup.inc.php" method="POST">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username" required><br>
            <p>First Name</p>
            <input type="text" name="firstname" placeholder="Enter First Name" required><br>
            <p>Last Name</p>
            <input type="text" name="lastname" placeholder="Enter Last Name" required><br>
            <p>E-Mail</p>
            <input type="text" name="email" placeholder="Enter E-Mail" required><br>
            <p>Password</p>
            <input type="password" name="pwd" placeholder="Enter Password" required><br>
            <input type="submit" name="submit" value="Sign Up">
        </form>
            <input type="button" onClick="location.href='signin.php'" value='Sign In Instead'>
    </div>
</body>
</html>