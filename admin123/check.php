<?php
session_start();

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  if (!empty($email) && !empty($pass)) {
    if ($email == 'admin' && $pass == 'admin') {
      $_SESSION['adminAccess'] = true;
      header('location:admin.php');
    }else {
      $_SESSION['error'] = 'Email ve ya parol sehvdir';
      header('location:daxilol.php');
    }
  }else {
    $_SESSION['error'] = 'Xanalari doldurun';
    header('location:daxilol.php');
  }
}else {
  header('location:index.php');
}
 ?>
