<?php include_once('register_project.php');?>
<?php include_once('functions.php');?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="regist.css">

	<title> تسجيل دخول جديد </title>
</head>
	<body>


<div class="container">
	<div class="form">

<div class="heading">
	<h1> إنشاء حساب جديد </h1>
</div>

<div class="wrap" >
<div class="f1" dir="rtl">
	<form action="register_project.php" method="post">


<label> الاسم الاخير </label>
<input type="text" name="last_name"  required/>
<span class="focus-input"></span>
</div>

<div class="f2" dir="rtl">
<label>الاسم الاول     </label>
<input type="text" name=" first_name"  required/>
<span class="focus-input"></span>
</div>
</div>


<div class="wrap2" dir="rtl">
<label>كلمة المرور</label>
<input type="password" name="password" required/>
<span class="focus-input2"></span>
</div>

<div class="wrap2" dir="rtl">
<label>البريد الالكتروني</label>
<input type="email" name="email" required/>
<span class="focus-input2"></span>
</div>

<div class="wrap2" dir="rtl">
<label>الرقم الجامعي</label>
<input type="text" name="University_ID"  required/>
<span class="focus-input2"></span>
</div>

<!--
<label  dir="rtl" for="user_type">المستخدم </label>

<div class="usert" dir="rtl">
<input type="radio" name= "user_type" value="student"  required>طالب 
<input type="radio" name= "user_type" value="Admin"  required>مشرف 
</div>-->
<button class="btn" type="submit" name="save" > إنشاء الحساب  </button>

</div>
</form>

<div class="image">
	<img src="https://mostaql.hsoubcdn.com/uploads/397545-TYpVo-1587547662-5ea00e0e7a328.jpg" class="img"/>
</div>

</div>
</div>

	</body>

</head>
</html>
