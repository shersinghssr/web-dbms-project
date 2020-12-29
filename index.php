<?php
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Fast Torrents | Home</title>
        <link rel="stylesheet" href="style/index.css">
		<link rel="shortcut icon" type="image/png" href="style/multimedia/favicon1.png">
	</head>
	<body>
		<header>
			<?php
			include_once "header.php";
			?>
		</header>
		<div class="background-wrap">
			<video id="video-bg-elem" preload="auto" autoplay="true" loop="loop" muted="muted">
				<source src="style/multimedia/video.mp4" type="video/mp4">
					Video not supported
			</video>
		</div>
		<div class="content">
			<h1>Welcome</h1>
			<p>To The World Of Torrents</p>..
			<?php
			if (isset($_SESSION['u_id'])) {
				echo "<input type=button onClick=location.href='logout.php' value='Logout'>";
			}
			else {
			echo "<input type=button onClick=location.href='signin.php' value='SIGN IN'> <br>
			<input type=button onClick=location.href='signup.php' value='SIGN UP'>";}
			?>
		</div>
	</body>
</html>
