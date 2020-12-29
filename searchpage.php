<?php
?>

<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Fast Torrent | Search</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style/search/jquery-ui.css">
<link rel="stylesheet" href="style/search/icons.css">
<link rel="stylesheet" href="style/search/scrollbar.css">
<link rel="stylesheet" href="style/search/style7f0f.css?ver=2.5">
<link rel="shortcut icon" type="image/png" href="style/multimedia/favicon1.png">
</head>
<body class="search-index-page">
<div class="mobile-menu"></div>
<div class="top-bar">
<div class="container">
<div class="top-bar-left">
</div>
<ul class="top-bar-nav">
<?php
 include_once "header.php";
?>
</ul>
</div>
</div>
<header>

</header>
<main class="container">
<div class="row">
<div class="col-8 col-push-2 page-content ">
<div class="logo"><a href="index.php"><img alt="logo" src="style/multimedia/favicon2.png"></a></div>
<div class="search-box">
<form id="search-index-form" method="POST" action="searchres.php">
<input type="text" placeholder="Search for torrents.." id="autocomplete" name="search" class="ui-autocomplete-input form-control">
<button type="submit" name="submit-search" class="btn btn-search"><i class="flaticon-search"></i>Search</span></button>
</form>
</main>
<ul class="search-categories">
<li>
<h3><a href="viewall.php" title="Movies"><span class="icon"><i class="flaticon-discography"></i></span>Show All </a></h3>
</li>    
<li>
<h3><a href="movies.php" title="Movies"><span class="icon"><i class="flaticon-movies"></i></span>Movies </a></h3>
</li>
<li>
<h3><a href="software.php" title="Television"><span class="icon"><i class="flaticon-apps"></i></span>Softwares </a></h3>
</li>
<li>
<h3><a href="games.php" title="Games"><span class="icon"><i class="flaticon-games"></i></span>Games </a></h3>
</li>
<li>
<h3><a href="music.php" title="Musics"><span class="icon"><i class="flaticon-music"></i></span>Music </a></h3>
</li>
<li>
<h3><a href="books.php" title="Applications"><span class="icon"><i class="flaticon-book"></i></span>Books </a></h3>
</li>
</ul>
<footer>
<a class="scroll-top" href="#"><i class="flaticon-up"></i></a>
<ul>
<li><a>Fast Torrents | Registered 2019</a></li>
</ul>
</footer>

<script>
if (window.top !== window.self) window.top.location.replace(window.self.location.href);
</script>
</body>
</html>