<?php
	//Local Development Connection requirement
	$servername = "sql313.epizy.com";
	$username = "epiz_28593480";
	$password = "lvbQfNHHenVjVRr";
	$dbname = "epiz_28593480_sparks_bank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
