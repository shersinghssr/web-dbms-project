<?php
include_once "header.php"
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style/header.css">
<link rel="stylesheet" href="style/about.css">
</head>
<body>

<h2>Torrent is a method of distributing data without relying on a single server.</h2>
<h2>This is to make it harder for a downloadable file to become inaccessible and allows<br>
     people to download a file with a speed higher than that of the original uploader's<br>
     server without putting excessive strain on the uploader's server or its internet connection.</h2>
<h2>It all starts with a torrent file: this is a file having a unique identifying code (hash) for<br>
    a file or list of files, as well as a list of trackers.</h2>
<h2>This file is loaded into a torrent downloader such as deluge or uTorrent, which then announces <br>
    to all computers it knows with a torrent downloader as well as the tracker server that it needs <br>
    a file or set of files belonging to the hash.</h2>
<h2>The trackers (and the known torrent downloaders) will share a list of peers (seeders and leechers), <br>
    other people who have at least part of the requested file(s).</h2>
<h2>Seeders are people with the entire file(s) and who share the file(s), the first person to share <br>
    a file immediately becomes a seeder.</h2>
<h2>Leechers are people who have not completed the download yet, they will share the parts that they <br>
    have and will become seeders once they complete their download.</h2>
<h2>When the torrent downloader has received a list of peers it will contact a few individual peers <br>
    and starts requesting parts of the file(s) and begins downloading.</h2>
<h2>Right after receiving the first part of a file, the downloader will also start sharing it with <br>
    other leechers who have not received that part yet.</h2>
<h2>Once the download is complete, the downloader becomes a seeder for that torrent.</h2>

</body>
</html>
