<?php 

	$id  		= $_POST["id"];
	$about 		= $_POST["profile-about"];
	$name  		= $_POST["name"];
	$age   		= $_POST["age"];
	$phone 		= $_POST["phone"];
	$birthdate 	= $_POST["birthdate"];

	#############
	### POSTGRE
	#############	

	$con = pg_connect("host=localhost port=5432 dbname=aula user=postgres password=123");

	$q = pg_query( $con, "UPDATE agenda SET about='$about' name='$name', age='$age', phone='$phone', email='$email' WHERE id=$id ");

	if( $q ){
		header('Location: ../../pages/profile.php?edited=1');
	}
	else{
		header('Location: login.php?error=1');
	}
	

?>