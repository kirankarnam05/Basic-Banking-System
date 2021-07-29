<?php

    //Development Connection
	//$servername = "localhost";
	//$username = "root";
	//$password = "";
	//$dbname = "Indian_bank";


    //Remote Database Connection
	$servername = "remotemysql.com";
	$username = "Ash7V5roxa";
	$password = "Jx6sPeuhOR";
	$dbname = "Ash7V5roxa";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
