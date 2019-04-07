<?php

include '../database_connection/database_connection.php';

 if(isset($_POST["btn_submit"])){

        $clean_inputs = new database_operations();

       $admin_username = $clean_inputs->clean_input($_POST["txt_admin_username"]);
       $admin_password = $clean_inputs->clean_input($_POST["txt_admin_password"]);

       $login_controller = new database_operations();

       $login_controller->login_in_controller($admin_username,$admin_password);

 }


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Presby Health Services | Wifi Registration</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="../image/png" href="../images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../css/util.css">
  <link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->

<!-- Matomo -->
<script type="text/javascript">
  var _paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//web.presbyhealthservices.com/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '2']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->

</head>



<body>
  
  <div class="limiter">
    <div class="container-login100" style="background-image: url('../images/bg-01.jpg');">
      <div class="wrap-login100">
        <form class="login100-form validate-form" method="post">
          <span class="login100-form-logo">
            <img src="images/Logo.png" alt="Image" height="95px" width="92px"/>
          </span>

          <span class="login100-form-title p-b-34 p-t-27">
           Admin Log in
          </span>

          <div class="wrap-input100 validate-input" data-validate = "Enter username">
            <input class="input100" type="text" name="txt_admin_username" placeholder="Username">
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Enter password">
            <input class="input100" type="password" name="txt_admin_password" placeholder="Password">
            <span class="focus-input100" data-placeholder="&#xf191;"></span>
          </div>

          <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit" name="btn_submit">
              Login
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  

  <div id="dropDownSelect1"></div>
  
<!--===============================================================================================-->
  <script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="../vendor/bootstrap/js/popper.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="../vendor/daterangepicker/moment.min.js"></script>
  <script src="../vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="../vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="../js/main.js"></script>

</body>
</html>
</html>
