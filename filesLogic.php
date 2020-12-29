<?php
// connect to the database
include_once 'includes/dbh.inc.php';
include_once 'header.php';

// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];
    $title = mysqli_real_escape_string($conn, $_POST['title']);
	$category = mysqli_real_escape_string($conn, $_POST['category']);
    $filesize = mysqli_real_escape_string($conn, $_POST['filesize']);
    
    // destination of the file on the server
    
    
    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];

    if (!in_array($extension, ['torrent'])) {
        echo '<span style="color:red;text-align:center;">You file extension must be .torrent</span>';
    } elseif ($_FILES['myfile']['size'] > 10000000) { // file shouldn't be larger than 1Megabyte
        echo '<span style="color:red;text-align:center;">File too large!</span>';
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, 'c:/xampp/htdocs/Project/Torrent Project/torrents/'.$filename)) {
            $sql = "INSERT INTO $category (category, title, filesize, torfile) VALUES ('$category','$title','$filesize','$filename')";
            if (mysqli_query($conn, $sql)) {
                header("Location: uploadagain.php?upload=success");
            }
        } else {
            echo '<span style="color:red;text-align:center;">Failed to upload file</span>';
        }
    }
}