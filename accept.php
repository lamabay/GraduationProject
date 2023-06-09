<!--form accept-->
<?php
    include('functions.php');
    $id = $_GET['id'];
    $query = "SELECT * FROM requests WHERE id = '$id'";

 if(count(fetchAll($query)) > 0) {
    foreach(fetchAll($query) as $row){

$UID = $row['UID'];
$activity_name =$row['activity_name'];
$activity_type = $row['activity_type'];
$specialization= $row['specialization'];
$duration_activity= $row['duration_activity'];
$activity_date = $row['activity_date'];
$activity_time =$row['activity_time'];
$activity_location =$row['activity_location'];
$checkBox = $row['skill_acquired'];

$query = "INSERT INTO activities (UID, activity_name, activity_type,specialization, duration_activity,activity_date, activity_time, activity_location,skill_acquired) VALUES ('$UID','$activity_name', '$activity_type', '$specialization', '$duration_activity','$activity_date', '$activity_time', '$activity_location','$checkBox')";

        if ( performQuery($query)){
            echo "Account has been accepted. ";
            header('Location:http://localhost/projectlama/Profileadmin.php');
        }
        else
        {
            echo "Unknown error occured. Please try again.";
        }

$query = "DELETE FROM requests WHERE requests . id = '$id'"; 
if ( performQuery($query)){
            echo "   Account has been deleted.";
            header('Location:http://localhost/projectlama/Profileadmin.php');
        }
        else
        {
            echo "Unknown error occured. Please try again.";
        }

}

}
    
else
    {
        echo "Error occured.";
    }
  
?>
