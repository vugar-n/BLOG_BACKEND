<?php
 session_start();
 include 'partials/newhead.php';
 ?>
 <style>
 body {
     background: #222222 !important;
 }
 </style>
  <section id="loginpage">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-lg-offset-4">
                <div class="col-lg-12 text-center">
                    <img src="../images/logo.png" alt="" />
                    <form class="form-group" action="check.php" method="post">
                      <input class="form-control" type="text" name="email" placeholder="Login">
                      <input class="form-control" type="password" name="pass" placeholder="Password">
                      <input class="form-control btn" type="submit" name="submit" value="Sign in">
                    </form>
            </div>
            <div id="footer">
              <div class="col-lg-12 text-center">
                  <?php
                            if (isset($_SESSION["error"])) {
                      ?>
                      <div class="alert alert-danger" role="alert">
                          <p><?= $_SESSION['error'] ?></p>
                      </div>
                      <?php
                      unset($_SESSION['error']);
                    }
                   ?>
                </div>
                <div class="clearFix"></div>
            </div>
        </div>
    </div>
    </div>
  </section>
  <?php
    include 'partials/newscripts.php';
   ?>
