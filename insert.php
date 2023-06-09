<?php
include("functions.php");

 if(isset($_POST['send'])){
 
$UID = $_POST['UID'];
$activity_name = $_POST['activity_name'];
$activity_type = $_POST['activity_type'];
$specialization= $_POST['specialization'];
$duration_activity= $_POST['duration_activity'];
$activity_date = $_POST['activity_date'];
$activity_time =$_POST['activity_time'];
$activity_location =$_POST['activity_location'];
$checkBox = implode(',', $_POST['skill_acquired']);

$query = " INSERT INTO requests (UID,activity_name,activity_type,specialization,duration_activity,activity_date,activity_time,activity_location,skill_acquired) VALUES ('$UID','$activity_name', '$activity_type ','$specialization','$duration_activity','$activity_date ','$activity_time','$activity_location','$checkBox')";

	if ( performQuery($query)){
		header('Location:http://localhost/projectlama/studenthome.php');
	}
	
	else{
	echo "error";
    }
}


?>