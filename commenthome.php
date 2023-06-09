<?php 
date_default_timezone_set('Europe/copenhagen');
include 'register_project.php';

?>

<!DOCTYPE html>
<html >
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="homee.css">


<title>تعليقات </title>
</head>
<!--The main bar -->

<div dir="rtl" class="topbar">
  <a class="home" href="http://localhost/projectlama/home.php"> النادي الطلابي لكلية الجموم  </a>
  <a class="but" onclick = "document.getElementById('id01').style.display='block'" href="##">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
      <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/></svg>  تسجيل الدخول </a>
  <a class="but" href="http://localhost/projectlama/register.php"> 
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
      <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
      <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/> </svg> تسجيل جديد  </a>


<!--sign in-->

<div id="id01" class="modal">
<form class="modal-content" action="register_project.php" method="post" >
  <div class="imgcontainer">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    <img src="https://img.icons8.com/pastel-glyph/2x/person-male.png" alt="Avatar" class="avatar">
    </div>

<div class="container" dir="rtl">
    <label><b> الرقم الجامعي </b></label>
    <input type="text" name="University_ID" required placeholder=" ادخل الرقم الجامعي     "  >
</div>

<div class="container" dir="rtl">
    <label ><b> كلمة المرور </b></label>
  <input type="password" name="password" required placeholder="ادخل كلمة المرور   "  >
</div>

<div class="container">
    <button class="but1 " type="submit" name="login">تسجيل  </a></button>
<label>
    <input dir="rtl" type="checkbox" checked="checked" name="remember">تذكرني 
</label>
</div>

<div class="container" style="background-color:#f1f1f1;overflow: hidden;">
  <button class="cancelbtn" type="button" onclick="document.getElementById('id01').style.display='none'">الغاء </button>
  <a class="regbtn" href="http://localhost/projectlama/register.php"> تسجيل جديد  </a>
    <!--<span class="psw" dir="rtl">نسيت  <a class="pass" href="#">كلمة المرور ؟ </a>  </span>-->
</div>
</form>
</div>


<!--Locks the login window-->
<script>
    var modal = document.getElementById('id01');
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
</script>

</div>


<!--bar  1 -->

<section class="ppp" dir="rtl">
<ul >
  <li><a href="#Become a partner">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
      <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/></svg>   حول </a> 
  </li>

  <li><a href="http://localhost/projectlama/comment.php">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots" viewBox="0 0 16 16">
      <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
      <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/></svg>     الاراء</a>
  </li>

  <li class="wwdown"><a href="#Our fields">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
      <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/></svg>  التخصصات</a>
      <div class="wwdown-content">
        <a href="cs.php">علوم الحاسب الآلي</a>
        <a href="Accounting.php"> محاسبة </a>
        <a href="Media.php">اعلام  </a> 
  </li>
</ul>
</section>

<!--comment-->
<?php

getComments($conn);
?>


</html>
