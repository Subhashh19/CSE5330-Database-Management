<!doctype html>
<html>
    <head>
        
        
        <style>
            body {
           margin:0;
           padding:0;
           font-family: "Times New Roman", Times, serif;

}
</style>
<h1>helloooo</h1>
</head>

<body text="" style="background:url(artGallery5.jpg);background-size:100%">
	
</body>
</html>
<?php
include 'header.php';
require 'db_connection.php';
global $conn;
$sql = "DELETE FROM state WHERE stateAb='$_POST[stateAb]'";
if(!$conn->query($sql)) {
    echo(" Error: " . $conn -> error);
}
echo("<br><p align='center' ><font color = #228B22>Deletion is successful </p>");
?>
<?php
include 'footer.php';
?>
