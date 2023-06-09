<?php
    include('functions.php');
    $id = $_GET['id'];
    
    $query = "DELETE FROM requests WHERE requests . id = '$id';";
        if(performQuery($query)){
           echo "<script>alert('تم رفض الدورة ')</script>";
           header('Location:http://localhost/projectlama/Profileadmin.php');
           
        }else{
            echo "Unknown error occured. Please try again.";
        }

?>
