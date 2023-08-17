<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "art_gallery";
global $conn;
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Error:Connection failed...Try again " . $conn->connect_error);
}
echo "<br>";
echo "<br>";

echo ("<p align='center'><font color=#191970 size='4pt'><strong>Connection to the art gallery database is successful....!!</p>");


?>
<center>
<form method="post" action=index.php>
<button type="submit" name="submit" class="btn navbar-btn">Home Page</button>
</form>
</center>