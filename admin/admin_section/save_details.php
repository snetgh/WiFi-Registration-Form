<?php

// Basic example of PHP script to handle with jQuery-Tabledit plug-in.
// Note that is just an example. Should take precautions such as filtering the input data.

require_once '../../database_connection/database_connection.php';

header('Content-Type: application/json');

$input = filter_input_array(INPUT_POST);


if ($input['action'] === 'edit') {
    mysqli_query($my_database_connection,"UPDATE `user_details` SET `first_name` = '".$input["staff_first_name"]."', `last_name` = '".$input["staff_last_name"]."', `department` = '".$input["staff_department"]."', `password` = '".$input["staff_password"]."', `user_status` = '".$input["registration_status"]."' WHERE `id` = '".$input["id"]."'");
}

if($input['action'] === 'delete'){
	 mysqli_query($my_database_connection,"DELETE FROM `user_details` WHERE `id` = '".$input["id"]."'");
}

mysqli_close($my_database_connection);

echo json_encode($input);



?>