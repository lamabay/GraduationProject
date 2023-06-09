<?php
session_start();

$conn = mysqli_connect('localhost','root','','project');
 
 if (!$conn) {
 	die("not connect. ".mysql_error());
 }
$query = "SELECT * FROM  entry_details ";
$final_query = mysqli_query($conn,$query);
$count = mysqli_num_rows($final_query);

if($count > 0 ){

	
}

 ?>