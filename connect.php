<?php

    $dbname = "oluson_mpesa.push";
	$dbhost = "localhost";
	$dbuser = "oluson_mpesauser";
	$dbpass = "pZ.52.CRI)+u";

	$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	//$connection = mysqli_select_db($conn,$dbname);
    $response = "";
    if ($connection) {
        //$response = "success";
    }else{
        //$response = "db fail";
    }

?>