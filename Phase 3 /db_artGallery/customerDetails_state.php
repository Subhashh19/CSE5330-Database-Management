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
$sql = "Select name,street,city,stateAb,zipcode
        from customer
        where stateAb ='TX'";
if(!$result = $conn->query($sql)) {
	  echo("\n Error description: " . $conn -> error);
} else {
	// echo "<pre>";
    if($result->num_rows > 0) {
    	$member = array();
        while($row = $result->fetch_array()){
        	$temp = array();
        	$temp['name'] = $row['name'];
        	$temp['street'] = $row['street'];
            $temp['city'] = $row['city'];
            $temp['stateAb'] = $row['stateAb'];
            $temp['zipcode'] = $row['zipcode'];
        	
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
      <th>name</th>
      <th>street</th>
      <th>city</th>
      <th>stateAb</th>
      <th>zipcode</th>
    </tr>
</thead>
    <tbody>
  <?php foreach ($member as $key => $value) { ?>
  	 <tr>
		<td><?php print_r($value['name']) ?></td>
		<td><?php print_r($value['street']) ?></td>
        <td><?php print_r($value['city']) ?></td>
        <td><?php print_r($value['stateAb']) ?></td>
        <td><?php print_r($value['zipcode']) ?></td>
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