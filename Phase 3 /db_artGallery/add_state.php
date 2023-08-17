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
</head>

<body text="blue" style="background:url(artGallery5.jpg);background-size:100%">
    
</body>
</html>
<?php
include 'header.php';
//require 'db_connection.php';
?>
<style type="text/css">
body {
    /*background-color : #DCDCDC;*/
    margin: 1;
    padding: 1;
text-align = center;
}
form {
	width: 350px;
	margin: 1 auto;
}
</style>
<center>
<form method="post" action="save_state.php">
	<p>
        <label for="stateAb">stateAb:</label>
        <input type="text" name="stateAb" id="stateAb">
    </p>
    <p>
        <label for="stateName">stateName:</label>
        <input type="text" name="stateName" id="stateName">
    </p>
  <button type="submit" name="submit" class="btn navbar-btn">Submit</button>
</form>
</center>

<?php
include 'footer.php';
?>