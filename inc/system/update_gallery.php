<?php 

	$id  		= $_POST["id"];
	$name  		= $_POST["name"];
	$age   		= $_POST["age"];
	$phone 		= $_POST["phone"];
	$email 		= $_POST["email"];

	#############
	### MYSQL
	#############

	#$con = mysqli_connect("localhost", "root", "123", "aula");
	#$q = mysqli_query( $con, "SELECT * FROM agenda WHERE email='$email' AND password='$password' " );
	#$cont = mysqli_num_rows($q);

	#############
	### POSTGRE
	#############	

	$con = pg_connect("host=localhost port=5432 dbname=aula user=postgres password=123");
	$q = pg_query( $con, "UPDATE agenda SET name='$name', age='$age', phone='$phone', email='$email' WHERE id=$id ");

	if( $q ){
		header('Location: ver.php?edited=1');
	}
	else{
		header('Location: login.php?error=1');
	}
	

?>