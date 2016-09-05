<?php
include '../config.php';
session_start();
  if ($_SESSION['adminAccess']) {

    $id = $_GET['id'];
    $connect->delete("news" , "$id");
    header("location:index.php");
  }else {
    header("location:../../index.php");
  }
 ?>
