<?php
session_start();

$conn = mysqli_connect('localhost','root','','project');
 
 if (!$conn) {
 	echo "database cannection fild .... ";
 }

/*regist*/
$first_name= $last_name= $password=  $email= $University_ID='';

if(isset($_POST['save'])){
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$password =  $_POST['password'];
	$email =$_POST['email'];
	$University_ID =$_POST['University_ID'];
	$user_type =$_POST['user_type'];
	$password = md5($password);
$std="student";
$admin="admin";

	$sql = " INSERT INTO entry_details (first_name,last_name,password,email,University_ID,user_type) VALUES ('$first_name', '$last_name ','$password ','$email','$University_ID','$user_type')";
	
	if ( mysqli_query($conn,$sql)){
		$_SESSION['student'] = $std;
		$_SESSION['University_ID'] = $University_ID;
		header('Location:http://localhost/projectlama/studenthome.php');
	}
	elseif( mysqli_query($conn,$sql)){
		$_SESSION['admin'] = $admin;
		$_SESSION['University_ID'] = $University_ID;
		header('Location:http://localhost/projectlama/homepage.php');
	}

	else{
    echo "<script>alert('الرجاء التاكد من المعلومات المدخلة  ')</script>";		
    }
}


/*login*/
if (isset($_POST['login'])) {
	$University_ID =$_POST['University_ID'];
	$password =  $_POST['password'];
    $password = md5($password);
$std="student";
$admin="admin";
	$query = "SELECT * FROM entry_details WHERE  University_ID = '$University_ID' AND password ='$password'";

	$result = mysqli_query($conn,$query);
	if (mysqli_num_rows($result) == 1){
		$_SESSION['University_ID'] = $University_ID;
		header('Location:http://localhost/projectlama/homepage.php');
	}
	

	$query = "SELECT * FROM entry_details WHERE  University_ID = '$University_ID' AND password ='$password'AND user_type='$std'";

	$run_std= mysqli_query($conn,$query);

		$query = "SELECT * FROM entry_details WHERE  University_ID = '$University_ID' AND password ='$password'AND user_type='$admin'";
	$run_admin= mysqli_query($conn,$query);

	if (mysqli_num_rows($run_std)== 1) {
	header('Location:http://localhost/projectlama/studenthome.php');
	}
	if (mysqli_num_rows($run_admin)== 1) {
	header('Location:http://localhost/projectlama/homepage.php');
	}
	/*
	$result = mysqli_query($conn,$query);

	if (mysqli_num_rows($result) == 1){
		$_SESSION['University_ID'] = $University_ID;
		header('Location:http://localhost/projectlama/homepage.php');
	}
	
	else{
    echo "<script>alert('الرجاء التاكد من المعلومات المدخلة  ')</script>";		
    }*/
}


/*comment*/
function setComment($conn){
	if (isset($_POST['commentSubmit'])) {
		$UID = $_POST['UID'];
		$date = $_POST['date'];
		$message = $_POST['message'];
		$sql = "INSERT INTO comment(UID , date , message) VALUES ('$UID','$date','$message')";
		$result = $conn->query($sql);
	}
}

function getComments($conn){
	$sql = "SELECT * FROM comment";
	$result = $conn->query($sql);

	while ( $row = $result->fetch_assoc()) {
		echo "<div class = 'comment_box'><h3>";
		echo $row['UID']."<br>";  
		echo $row['date']."<br><br></h3><p>"; 
		echo  nl2br($row['message'])."<br><br></p>";
		echo"</div>";
	}
}


?>