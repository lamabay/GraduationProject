<?php include_once('insert.php');?>
<?php include_once('register_project.php');?>
<?php include_once('functions.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="formm.css">
  <title>اضافة نشاط </title>
</head>

<body>
  <div class="container">
    <div class="form">
      <div class="heading">
        <h1>إضافة نشاط </h1>
      </div>

      <div class="wrap">
        <div class="f1" dir="rtl">
          <form action="insert.php" method="post">
            <label> اسم النشاط     </label>
            <input type="text" name="activity_name"  required />
            <span class="focus-input"></span>
        </div>

        <div class="f2" dir="rtl">
          <label> نوع النشاط    </label>
          <input type="text" name="activity_type"  required />
          <span class="focus-input"></span>
        </div>
      </div>

      <div class="wrap">
        <div class="f1" dir="rtl">
            <label> مدة النشاط   </label>
            <input type="text" name="duration_activity"  required/>
            <span class="focus-input"></span>
        </div>

        <div class="f2" dir="rtl">
          <label> التخصص </label>
          <div class="form-element form-select">
            <select class="Activitylocation" name="specialization"  required>
              <option option disabled selected value="" class="form-select-placeholder"></option>
              <option value="computer science">علوم الحاسب الآلي</option>
              <option value="Accounting">محاسبة </option>
              <option value="Media">اعلام</option>
            </select>
            <span class="focus-input"></span>
          </div>
        </div>
      </div>

      <div class="wrap">
        <div class="f1" dir="rtl">
          <form action="insert.php" method="post">
            <label>   وقت  النشاط    </label>
            <input class="Activitytime" type="time" name="activity_time" placeholder="Activity time"/   required>
            <span class="focus-input"></span>
        </div>
        
        <div class="f2" dir="rtl">
          <label>  تاريخ النشاط  </label>
          <input class="Activitydate" type="date" id="birthday" name="activity_date"   required>
          <span class="focus-input"></span>
        </div>
      </div>

      <div class="wrap2" dir="rtl">
        <label>  موقع النشاط     </label>
        <div class="form-element form-select">
          <select class="Activitylocation" name="activity_location"   required>
            <option option disabled selected value="" class="form-select-placeholder"></option>
            <option value="داخل الجامعة  ">داخل الجامعة   </option>
            <option value="خارج الجامعة  ">خارج الجامعة  </option>
            <option value="كلية ">كلية   </option>
          </select>
          <span class="focus-input2"></span></div>
      </div>

      <div class="s " dir="rtl" >
        <legend> المهارة المكتسبة     </legend>
        <label ><input type="checkbox" name="skill_acquired[]"  value="work as one team ">العمل بروح الفريق الواحد  </label>
        <label> <input type="checkbox" name="skill_acquired[]" value=" Casting skill "> مهارة الإلقاء  </label>
        <label> <input type="checkbox" name="skill_acquiredk[]" value="Problem-solving skill ">  مهارة حل  المشاكل    </label>
        <label> <input type="checkbox" name="skill_acquired[]" value=" Interpersonal communication ">  التواصل بين الأشخاص    </label>
        <label> <input type="checkbox" name="skill_acquired[]" value="Active listening ">  الاستماع الفعال   </label>
        <label> <input type="checkbox" name="skill_acquired[]" value="negotiate ">   تفاوض    </label>
        <label> <input type="checkbox" name="skill_acquired[]" value="حل النزاعات   ">  حل النزاعات   </label>
        <label> <input type="checkbox" name="skill_acquired[]" value=" Management">  إدارة   </label>
        <label> <input type="checkbox" name="skill_acquired[]" value="  Leadership ">  القيادة   </label>
        <label> <input type="checkbox" name="skill_acquired[]" value="  organisation  ">  منظمة   </label>
        <label> <input type="checkbox" name="skill_acquired[]" value="Initiative skills ">  مهارات المبادرة   </label>
      </div>
      <button onclick="myFunction()" class="btn" type="submit" name="send"> ارسل    </button>

<?php
if (isset($_SESSION['University_ID'])) {
echo "<input type='hidden' name='UID' value='".$_SESSION['University_ID']."'>"; }
  ?>
    </form>
  </div>
</div>
</div>
<script type="text/javascript">
  document.addEventListener("change", function(event) {
    let element = event.target;
    if (element && element.matches(".Activitylocation")) {
      element.classList[element.value ? "add" : "remove"]("-hasvalue");
    }
  });
</script>
<script>
  function myFunction() {
    alert("تم الارسال للمشرف شكرا لك ");
  }
</script>
</body>
</html>
