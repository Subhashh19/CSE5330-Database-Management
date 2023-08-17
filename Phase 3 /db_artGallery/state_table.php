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

<body text="white" style="background:url(artGallery5.jpg);background-size:100%">
	
</body>
</html>
<?php
include 'header.php';
require 'db_connection.php';
global $conn;
$sql = "SELECT * FROM `state`";
if(!$result = $conn->query($sql)) {
	  echo("\n Error description: " . $conn -> error);
} else {
	// echo "<pre>";
    if($result->num_rows > 0) {
    	$member = array();
        while($row = $result->fetch_array()){
        	$temp = array();
        	$temp['stateAb'] = $row['stateAb'];
        	$temp['stateName'] = $row['stateName'];
        	
        	$member[] = $temp;
        }
     }
}
?>
<style type="text/css">
.button {
    display: block;
    width: 115px;
    height: 30px;
    background: #4E9CAF;
    padding: 2px;
    text-align: center;
    border-radius: 5px;
    color: white;
    font-weight: bold;
    line-height: 25px;
}</style>


<div style="padding-left:2%; padding-right: 2%;">
<div class="table-wrapper">

<table id="example" class="display" style="width:100%">
<thead>
    <tr>
      <th>stateAb</th>
      <th>stateName</th>
    </tr>
</thead>
    <tbody>
  <?php foreach ($member as $key => $value) { ?>
  	 <tr>
		<td><?php print_r($value['stateAb']) ?></td>
		<td><?php print_r($value['stateName']) ?></td>
	</tr>
 <?php  } ?>
    </tbody>
   
</table>
<?php include 'footer.php'; ?>
<script type="text/javascript">
	$(document).ready( function () {
    $('#example').DataTable();
} );
</script>