<?php 
include_once('register_project.php');
include("functions.php");
$UniversityID=$_SESSION['University_ID'];
$query = "SELECT * FROM user_details where UniversityID='$UniversityID'"; 
$result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="pro.css">

    <?php
  //to check recorerds 
    if (mysqli_num_rows($result) > 0) {
        ?>

</head>

<!--The main bar -->
<div dir="rtl" class="topbar">
    <a class="home" href="http://localhost/projectlama/studenthome.php"> النادي الطلابي لكلية الجموم  </a>
    <a class="" href="http://localhost/projectlama/Pro.php"> <?php echo $_SESSION['University_ID']; ?> </a>
    <a class="logout" href="http://localhost/projectlama/home.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
            <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
            <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z"/></svg>تسجيل خروج </a>
</div>

<!--Student file on the right-->
<title>  ملف  الشخصي  </title>

<body dir="rtl">
    <nav dir="rtl" class="mynav">
        <header>
<svg width="250" height="250"   xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>
        <!-- <form action="#" method="post"enctype = "multipart/form-data">
            <input type="file" name="img">
            <input type="submit" name="imge">
        </form>
        <?php
    //mysqli_connect("localhost","root","","project");
    //mysqli_select_db("project");
//$conn = mysqli_connect('localhost','root','','project');
 
//if (!$conn) {
//echo "database cannection fild .... ";
//}

$UniversityID=$_SESSION['University_ID'];
$query = "SELECT * FROM user_details where UniversityID='$UniversityID'"; 
$result = mysqli_query($conn,$query);
    if (isset($_POST['imge'])) {
        $filename = addslashes($_FILES["img"]["name"]);
        $tmpname = addslashes(file_get_contents($_FILES ["img"]["tmp_name"]));
        $filetype = addslashes($_FILES ["img"]["type"]);
        $array = array('jpg','jpeg');
        $ext = pathinfo($filename,PATHINFO_EXTENSION);
       if (!empty($filename)) {
            if (in_array($ext,$array)) {
                $sql = "INSERT INTO `user_details` (name,image) VALUES ('$filename','$tmpname')";
                $insert = mysqli_query($conn,$sql);
            } 
                else {echo "unsupported ";}    
}
else{echo "please select the image";}
}
$res ="SELECT* FROM user_details";
$res = mysqli_query($conn,$res);
while($row = mysqli_fetch_array($res)){
 echo '<img src = "data:image/jpeg;base64,'.base64_encode($row['image']).'" width="250" height = "250">';
}
?>-->
<script>
  if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
  }
</script>
        </header>
        
        <div>
            <a  href="#Personal_Particulars">  الملف الشخصي    </a>
            <a  href="#Key_Abilities">   المهارات المكتسبة    </a>
            <a  href="#Qualifications">   النقاط المكتسبة    </a>
            <a  href="#Hobby">  الشهادات   </a>
            <a  href="#AA">   الانشطة المقدمة</a>
        </div>
    </nav>

<!--Student file -->
    <main id="main-doc">
        <?php

        while($row = mysqli_fetch_array($result)){
            ?>

            <aside>
                <section id="Personal_Particulars">
                    <header>
                        <h1> الملف الشخصي  </h1>
                    </header>
                    <h3> <?php echo $row['user_Fname']; ?>
                    <?php echo $row['user_Lname']; ?></h3>
                    <ul id="PP">
                        <li>  الرقم الجامعي  :</li>
                        <li><?php echo $row['UniversityID']; ?></li>
                        <li> التخصص   :</li>
                        <li><?php echo $row['Department']; ?></li>
                        <li> الايميل: </li>
                        <li><?php echo $row['Email']; ?></li>
                        <li> الجنسية:  </li>
                        <li><?php echo $row['Nationality']; ?></li>
                        <li> الجنس :</li>
                        <li><?php echo $row['Gender']; ?></li>
                        <li> الهوية الوطنية :</li>
                        <li><?php echo $row['user_ID']; ?></li>
                    </ul>
                </section>
            </aside>
            <?php
        }
        ?>  
        <?php
    }
    else{echo "No result found";}
?>

<section id="Key_Abilities">
    <header>
        <h1><code>  المهارات المكتسبة  </code></h1>
    </header>
    <div id="abilities">
        
    </div>
</section>

<section id="Qualifications">
    <header>
        <h1><code> النقاط المكتسبة  </code></h1>   
    </header>
    <div id="qualifications">
        
    </div>
</section>

<section id="Hobby">
    <header>
        <h1><code> الشهادات </code></h1>
    </header>
    <div id="qualifications">
        
    </div>
</section>

<section id="AA">
    <header>
        <h1><code> الانشطة المقدمة</code></h1>
    </header>

    <div id="qualifications">

        <?php 

        $servername ="localhost";
        $username ="root";
        $password="";
        $dbname="project";
        $conn= mysqli_connect($servername,$username,$password,$dbname);
        if(!$conn){
            die("connection failed: ". mysqli_connect_error());
        }

        $sql = 'SELECT * FROM activities order by UID ASC';
        $result = mysqli_query($conn ,$sql);

        while ($row = mysqli_fetch_assoc($result)) {
            if($_SESSION['University_ID']==$row['UID']){
                echo '<div class="wrong"> <a href="http://localhost/projectlama/Activitypage.php">' . $row['activity_name'] . '</a></div>';
                //echo $row['activity_name'].' || '.$row['UID'];
                echo"<br>"."<hr>";} }

                if(mysqli_query($conn,$sql)){
                    //echo "**";
                }
                else{echo "ERROR creating table : ",mysqli_error($conn);}
                mysqli_close($conn);
                ?>
                </div>
            </section>
        </main>

</body>
</html>