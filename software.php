<?php
include "includes/dbh.inc.php";
?>
<html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Fast Torrent | Software</title>
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
<body>
</ul>
</div>
</div>    
<div class="box-info-heading clearfix">
<h3> Download Most Popular Software Torrents</h3>
</div>
</div>
<div class="featured-list">
<div class="table-list-wrap">
<table class="table-list table table-responsive table-striped">
<thead>
<tr>
<th class="coll-1 name">Name</th>
<th class="coll-2">Category</th>
<th class="coll-3">Size</th>
<th class="coll-4">Download</th>
</tr>
</thead>


<?php

$sql = "SELECT * FROM software;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0){
	while ($row = mysqli_fetch_assoc($result)){
        echo "<tbody>
                <tr>
                <td class='coll-1 name'><i class='flaticon-apps'></i><a>".$row['title']."</a></td>
                <td class='coll-2'>".$row['category']."</td>
                <td class='coll-3'>".$row['filesize']."</td>
                <td class='coll-4'><a href='torrents/".$row['torfile']."'><i class='flaticon-direct-download'></i><br>Download</a></td>
                </tr>
                </tbody>";
	}
}
?>
</table>
</div>
</div>
</body>
</html>