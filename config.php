<?php

    //Development Connection
	//$servername = "localhost";
	//$username = "root";
	//$password = "";
	//$dbname = "Indian_bank";


    //Remote Database Connection
	$servername = "remotemysql.com";
	$username = "687xxHsIvv";
	$password = "aP8r6ouxBG";
	$dbname = "687xxHsIvv";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
