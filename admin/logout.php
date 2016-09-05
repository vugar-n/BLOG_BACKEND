<?php
session_start();
if (isset($_POST['logout'])) {
  header('location:index.php');
  $_SESSION['adminAccess'] = false;
}
 ?>
