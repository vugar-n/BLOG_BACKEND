<?php
include '../config.php';
session_start();
if ($_SESSION['adminAccess']) {
  ?>
  <!doctype html>
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <title></title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="apple-touch-icon" href="apple-touch-icon.png">
      <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="../../assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="../../assets/css/style.css">
      <script src="../../assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
      <style media="screen">
        input{
          margin-top: 20px;
        }
        textarea{
          margin-top: 20px;
        }
      </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
          <h1 class="text-center">Add a news</h1>
          <form class="form-group" action="add.php" method="post" enctype="multipart/form-data">
            <input class="form-control" type="text" name="title" placeholder="Title">
            <input class="form-control" type="text" name="author" placeholder="Author">
            <textarea class="form-control" placeholder="Text" name="text" rows="8" cols="40"></textarea>
            <input class="form-control" type="date" name="date" placeholder="Date">
            <input class="form-control" type="file" name="photo" value="">
            <input class="btn btn-success form-control" type="submit" name="submit" value="> Submit">
          </form>
        </div>
      </div>
    </div>
    <?php
      if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        $author = $_POST['author'];
        $text = $_POST['text'];
        $date = $_POST['date'];
        $photo = $_FILES['photo']['name'];

        $target_dir = "../../images/";
        $target_file = date('dmYGis').$photo;
        move_uploaded_file($_FILES['photo']['tmp_name'] , $target_dir.$target_file);

        $query = $connect->insert("news" , "title, author, text, date , photo" , "'$title' , '$author' , '$text' , '$date' , '$target_file'");
        header('location:index.php');
      }
     ?>


   <script src="../../assets/js/vendor/jquery.js"></script>
   <script src="../../assets/js/vendor/bootstrap.min.js"></script>
   <script src="../../assets/js/main.js"></script>
   </body>
   </html>

   <?php
  }else {
  header('location:index.php');
  }
  ?>
