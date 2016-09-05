<?php
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
  </head>
  <body>
  <section id="navbar">
  <div class="container-fluid">
     <div class="row">
       <div class="col-lg-12">
         <ul class="nav nav-tabs">
           <li><a href="../admin.php">Home</a></li>
           <li class="active"><a href="#">News</a></li>
           <li><a href="#">Navbar</a></li>
           <li><a href="#">Logo</a></li>
           <li class="pull-right">
             <form action="../logout.php" method="post">
               <input class="btn btn-danger" type="submit" name="logout" value="Log Out">
           </form>
         </li>
         </ul>
          </section>
          <div class="container">
            <div class="row">
                <div class="col-lg-12">
                  <table class="table table-striped table-bordered text-left">
                   <thead>
                     <tr>
                       <th>
                         id
                       </th>
                       <th>
                         title
                       </th>
                       <th>
                         text_one
                       </th>
                       <th>
                         text_two
                       </th>
                       <th>
                         author
                       </th>
                       <th>
                         date
                       </th>
                       <th>
                         photo
                       </th>
                     </tr>
                   </thead>

                   <tbody>
                     <?php
                        include '../db.php';
                        $db = new Database();
                        $db->connect();
                        if ($db->db_con) {
                          $query = $db->select("news");

                          while ($row = mysqli_fetch_assoc($query)) {
                          ?>
                          <tr>
                            <td><?= $row["id"] ?></td>
                            <td><?= $row["title"] ?></td>
                            <td><?= $row["text_one"] ?></td>
                            <td><?= $row["text_two"] ?></td>
                            <td><?= $row["author"] ?></td>
                            <td><?= $row["date"] ?></td>
                            <td><?= $row["photo"] ?></td>

                          </tr>
                          <?php
                        }
                      }
                      ?>
                   </tbody>

                  </table>
                </div>
            </div>
          </div>
       </div>
     </div>
   </div>

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
