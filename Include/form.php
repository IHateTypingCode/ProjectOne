<?php
   $FirstName = '';
   $LastName  = '';
   $Email     = '';
   $errors = [
        'FirstNameError' => '',
        'LastNameError'  => '',
        'EmailError'     => ''
    ];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $FirstName = isset($_POST['FirstName']) ? $_POST['FirstName'] : '';
      $LastName  = isset($_POST['LastName']) ? $_POST['LastName'] : '';
      $Email     = isset($_POST['Email']) ? $_POST['Email'] : '';
        //تحقق الاسم الاول
        if(empty($FirstName)){
            $errors['FirstNameError'] = 'يرجى ادخال الاسم الاول';
        }
        // تحقق الاسم الاخير
        if(empty($LastName)){
            $errors['LastNameError'] = 'يرجى ادخال الاسم الاخير';
        }
        // تحقق البريد الإليكتروني
        if(empty($Email)){
            $errors['EmailError'] = 'يرجى ادخال البريد الإليكتروني';
        } elseif(!filter_var($Email,FILTER_VALIDATE_EMAIL)){
            $errors['EmailError'] = 'البريد الإليكتروني غير صحيح';
        }
        // تحقق عدم وجود اخطاء
        if(!array_filter($errors)){
            $FirstName = mysqli_real_escape_string($conn, $FirstName);
            $LastName  = mysqli_real_escape_string($conn, $LastName);
            $Email     = mysqli_real_escape_string($conn, $Email);
            $sql = "INSERT INTO users (FirstName, LastName, Email) VALUES ('$FirstName', '$LastName', '$Email')";
            if(mysqli_query($conn, $sql)){
                $FirstName = '';
                $LastName  = '';
                $Email     = '';
                header('Location:' . $_SERVER['PHP_SELF']);
                exit();
            } else {
                echo 'Error: '.mysqli_error($conn);
            }
       }
}
?>