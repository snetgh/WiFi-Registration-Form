<?php

header("Refresh:120");

if(!$_COOKIE["i"]=="in"){
  header("Location:../../index.php");
}

include '../../database_connection/database_connection.php';

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Presby Health Services | Wifi Registration</title>
  
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="../../bower_components/main/css/AdminLTE.css">

   <!-- Theme style -->
  <link rel="stylesheet" href="../../bower_components/datatables/css/jquery.dataTables.css">

  <link rel="stylesheet" href="../../bower_components/datatables/css/jquery.dataTables_themeroller.css">

  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- jQuery 3 -->
<script src="../../bower_components/jquery/js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/js/bootstrap.min.js"></script>

<script src="../../bower_components/tabledit-master/jquery.tabledit.min.js"></script>

<script src="../../bower_components/datatables/js/jquery.dataTables.min.js"></script>





<script type="text/javascript">
  
 $(document).ready(function(){

 $("#my_table1").dataTable({
    "bPaginate": false,
 });


   $("#my_table1").Tabledit({
            url: "save_details.php",
            columns: {
                identifier: [0, 'id'],
                editable: [[2,'staff_first_name'],[3,'staff_last_name'],[4,'staff_department'],[6,'staff_password'],[7, 'registration_status','{"Pending": "Pending", "Active": "Active"}']]
            },
            restoreButton: false,
            onSuccess: function (data, textStatus, jqXHR) {
                if (data.action === 'delete') {
                    $('#' + data.id).remove()             
            }
          }
        }); 




 })

  
</script>

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




<body class="hold-transition login-page">


 <div class="panel panel-default panel_view_customers">
    <div class="panel-body pbody">   


    <div>

      <table class="table table-hover table-striped" id="my_table1">
                                    
        <thead>
                                      
                                      <th>ID</th>
                                      <th>Staff ID</th>
                                      <th>First Name</th>
                                      <th>Last Name</th>
                                      <th>Department</th>
                                      <th>Number</th>
                                      <th>Password</th>
                                      <th>Status</th>

        </thead>
                                    <tbody>


                                <?php



                                  $get_query = "SELECT * FROM `user_details`";

                                  $get_all_data = mysqli_query($my_database_connection,$get_query);

                                  while ($get_data = mysqli_fetch_array($get_all_data)) {

                                    $user_id = $get_data["id"];
                                    $staff_id = $get_data["staff_id"];
                                    $staff_first_name = $get_data["first_name"];
                                    $staff_last_name = $get_data["last_name"];
                                    $staff_department = $get_data["department"];
                                    $staff_number = $get_data["telephone"];
                                    $staff_password = $get_data["password"];
                                    $staff_status = $get_data["user_status"];
                                   

                                    echo "<tr>
                                          <td>".$user_id."</td>
                                          <td>".$staff_id."</td>
                                          <td>".$staff_first_name."</td>
                                          <td>".$staff_last_name."</td>
                                          <td>".$staff_department."</td>
                                          <td>".$staff_number."</td>
                                          <td>".$staff_password."</td>
                                          <td><label class='label label-danger'>".$staff_status."</label></td>
                                        </tr>";
                                  }

                                ?>
                                       
                                    </tbody>
                                </table>
      
    </div>

    </div>
</div>


</body>
</html>
