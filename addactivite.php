<?php

$conn = mysqli_connect('localhost','root','','project');

if (!$conn) {
	echo "database cannection fild .... ";
}

function setAddact($conn){
	if (isset($_POST['addAct'])) {
		$select= null;
		$SID=$_SESSION['University_ID'];
		$selctedAct = $_POST['activity_name'];
		$UID = $_POST['UID'];

		$select = "SELECT id from activities WHERE UID='$UID' and activity_name='$selctedAct' ";
		$select = mysqli_query($conn,$select);
		$select = mysqli_fetch_array($select);

		$select = $select['id'] ;
		$exist = "SELECT SID,AID FROM `activitiesattendance` WHERE SID ='$SID' AND AID ='$select'";
		$exist = mysqli_query($conn,$exist);
		$count = mysqli_num_rows($exist);

		if ($count) {
			echo('مسجل ');
		}		

		else {
			$sql = "INSERT INTO `activitiesattendance`(SID,ATID,AID) VALUES ('$SID','$UID','$select')";
			$insert = mysqli_query($conn,$sql);
		}
	}
}

if(array_key_exists('addAct',$_POST)){
	setAddact($conn);
}
?>