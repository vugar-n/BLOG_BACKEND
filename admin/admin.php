<?php
session_start();
if ($_SESSION['adminAccess']) {
  include 'partials/newhead.php';
  ?>
  <section id="navbar">
  <div class="container-fluid">
     <div class="row">
       <div class="col-lg-12">
         <ul class="nav nav-tabs">
           <li class="active"><a href="#">Home</a></li>
           <li><a href="news/">News</a></li>
           <li><a href="#">Navbar</a></li>
           <li><a href="#">Logo</a></li>
           <li class="pull-right">
             <form action="logout.php" method="post">
               <input class="btn btn-danger" type="submit" name="logout" value="Log Out">
           </form>
         </li>
         </ul>
         <div class="col-lg-12">
           <img class="img-responsive center-block" src="../images/user.png" alt="user" />
         </div>
       </div>
     </div>
   </div>
     </section>
   <?php
   include 'partials/newscripts.php';
}else {
  header('location:index.php');
}
 ?>
