<?php

$FirstName = '';
$LastName = '';
$Email = '';
$errors = [
    'FirstNameError' => '',
    'LastNameError' => '',
    'EmailError' => ''
];

include_once 'Include/db.php';
include_once 'Include/form.php';
include_once 'Include/select.php';
include_once 'Include/db_close.php';


?>

<?php include_once 'parts\header.php' ?>


<!-- winner and counter -->



<div id="winner-gif" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: 10000; display: none;">
    <img id="confetti-gif" src="images/congratulations-7600.gif" alt="Celebration GIF" style="width: 100%; height: 100%; object-fit: cover;">
</div>




<!-- BS form -->
<div id="main-text" class="position-relative text-center">
  <div class="col-md-5 p-lg-5 mx-auto ">
<img src="/ProjectOne/images/gift.png" alt="">
     <h1 class="display-4 fw-normal">فوز مع علي!</h1>
    <p class="lead fw-normal">باقي على فتح التسجيل</p>
    <h3 id="countdown"></h3>
    <p class="lead fw-normal">للسحب على نسخة مجانية من البرنامج</p>
    <!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5"> 
<button id="winner" type="button" class="btn btn-primary d-none my-3 mx auto">
  اختر الرابح
</button>
</div>

  </div>
  <div class="container">
    <h3>للدخول بالسحب يرجى اتباع ما يلي:</h3>
    <!-- List -->
    <ul class="list-group list-group-flush">
      <li class="list-group-item"><a href="https://www.youtube.com/watch?v=xvFZjo5PgG0" target="_self">تابع البث المباشر على قناتنا على يوتيوب</a></li>
      <li class="list-group-item"><a href="">سأقوم ببث مباشر لمدة ساعة عبارة عن أسئلة وأجوبة حرة للجميع</a></li>
      <li class="list-group-item"><a href="">خلال فترة الساعة سيتم فتح صفحة التسجيل هنا حيث ستقوم بتسجيل اسمك وإيميلك</a></li>
      <li class="list-group-item"><a href="">بنهاية البث سيتم اختيار اسم واحد من قاعدة البيانات بشكل عشوائي</a></li>
      <li class="list-group-item"><a href="">الرابح سيحصل على نسخة مجانية من برنامج كامتازيا</a></li>
    </ul>
  </div>
</div>



 <div class="container">    
  <div class="position-relative text-right">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
<form  action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
  <div class="mb-3">
    <h3>الرجاء ادخل معلوماتك</h3>
    <label for="FirstName" class="form-label">الاسم الاول</label>
    <input type="text" name="FirstName" class="form-control" id="FirstName" value="<?php echo $FirstName ?>">
    <div class="form-text error"><?php echo $errors['FirstNameError'] ?></div>
  </div>
    <div class="mb-3">
      <label for="LastName" class="form-label">الاسم الاخير</label>
    <input type="text" name="LastName" class="form-control" id="LastName" value="<?php echo $LastName; ?>">
    <div class="form-text error"><?php echo $errors['LastNameError'] ?></div>
  </div>
  <div class="mb-3">
      <label for="Email" class="form-label">البريد الإليكتروني</label>
    <input type="text" name="Email" class="form-control" id="Email" value="<?php echo $Email; ?>">
   <div class="form-text error"><?php echo $errors['EmailError'] ?></div>


  <button type="submit" name="submit" class="btn btn-primary">ارسال المعلومات</button>
 </form>
     </div>
 </div>


 <!-- /BS form -->
 <!-- my form -->


   <!-- <form action="index.php" method="POST">
    <input type="text" name="FirstName" id="FirstName" placeholder="Put Your First Name">
    <input type="text" name="LastName" id="" placeholder="Put Your Last Name">
    <input type="text" name="Email" id="Email" placeholder="Put Your Email">
    <input type="submit" value="Send" name="submit" id="">

    </form>
    -->

    <!-- /my form -->

<div class="loader-con">
  <div id="loader">
    <canvas id="circularLoader" width="200" height="200"></canvas>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">الرابح في المسابقة!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <?php foreach($users as $user): ?>
        <h1 class="display-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($user['FirstName']) . ' ' . htmlspecialchars($user['LastName']); ?></h1>
      <?php endforeach; ?> 
      </div>

    </div>
  </div>
</div>






<div id="cards" class="row mb-5 pb-5">
  
    
        <div class="col-sm-4 mb-3">
            <div class="card my-2 bg-light">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text"><?php echo htmlspecialchars($user['Email']); ?></p>
                </div>
            </div>
        </div>
     
</div>


<?php include_once 'parts\footer.php' ?>