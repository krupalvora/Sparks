<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$servername = "sql313.epizy.com";
	$username = "epiz_28593480";
	$password = "lvbQfNHHenVjVRr";
	$dbname = "epiz_28593480_sparks_bank";

	$conn = new mysqli($servername, $username, $password, $dbname);
	//Database connection
	if($conn->connect_error){
		die('Connection Failed  :'.$conn->connect_error);
	}
	else{
		$stmt = $conn->prepare("insert into contact(name, email, message)values(?, ?, ?)");
		$stmt->bind_param("sss",$name, $email, $message);
		$stmt->execute();
		echo "Submitted successfully..";
		$stmt->close();
		$conn->close();
	}



?>