<?php

include 'database_connection/database_connection.php';

 if(isset($_POST["btn_submit"])){

    $clean_inputs = new database_operations();

    $user_first_name = $clean_inputs->clean_input($_POST["txt_first_name"]);
    $user_last_name = $clean_inputs->clean_input($_POST["txt_last_name"]);
    $user_staff_id = $clean_inputs->clean_input($_POST["txt_staff_id"]);
    $user_department = $clean_inputs->clean_input($_POST["select_department"]);
    $user_password = $clean_inputs->clean_input($_POST["txt_password"]);
    $user_tel = $clean_inputs->clean_input($_POST["txt_telephone"]);

    $new_database_action = new database_operations();

    $new_database_action->insert_data($user_first_name,$user_last_name,$user_staff_id,$user_department,$user_password,$user_tel);

 }

 ?>




<!DOCTYPE html>
<html lang="en">
<head>
	<title>Presby Health Services | Wifi Registration</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
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
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-logo">
						<img src="images/Logo.png" alt="Image" height="95px" width="92px"/>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Registration
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter First Name">
						<input class="input100" type="text" name="txt_first_name" placeholder="Enter First Name">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter Last Name">
						<input class="input100" type="text" name="txt_last_name" placeholder="Enter Last Name">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

          <div class="wrap-input100 validate-input" data-validate="Enter Telephone Number">
            <input class="input100" type="text" name="txt_telephone" placeholder="Enter Telephone Number">
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Enter Staff ID">
            <input class="input100" type="text" name="txt_staff_id" placeholder="Enter Staff ID">
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Enter Department">
            <select class="form-control" name="select_department">
              <option>Select Department</option>
              <option value="OPD">OPD</option>
              <option value="Emergency">Accident & Emergency</option>
			  <option value="KidsWord">Kid's Ward</option>
			  <option value="X-Ray">X-Ray</option>
			  <option value="Lab">Lab</option>
			  <option value="Maternity">Maternity</option>
			  <option value="FWard">Female Ward</option>
			  <option value="MWard">Male Ward</option>
			  <option value="Stores">Stores</option>
			  <option value="Pharmacy">Pharmacy</option>
			  <option value="Administration">Administration</option>
			  <option value="Dental">Dental Unit</option>
			  <option value="Eye">Eye Unit</option>
              <option value="Records">Records</option>
			  <option value="Chronic">Chronic Care</option>
            </select>
          </div>

           <div class="wrap-input100 validate-input" data-validate="Enter Password">
            <input class="input100" type="password" name="txt_password" placeholder="Choose Password">
            <span class="focus-input100" data-placeholder="&#xf191;"></span>
          </div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="btn_submit">
							Register
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>