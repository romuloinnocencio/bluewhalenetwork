<?php 

	$name  		= $_POST["name"];
	$birthdate  = $_POST["birthdate"];
	$email 		= $_POST["email"];
	$password 	= crypt($_POST["password"] , 'salt');

	#############
	### POSTGRE
	#############	

	$con = pg_connect("host=localhost port=5432 dbname=aula user=postgres password=123");

	$q = pg_query( $con, "INSERT INTO agenda (name, birthdate, email, password, photo) VALUES ('".$name."','".$birthdate."','".$email."','". $password ."','images/no-picture.jpg')");

	if( $q ){
		header('Location: ../../pages/timeline.php?');
	}
	else{
		header('Location: ../../pages/login.php?error=1');
	}	

?>