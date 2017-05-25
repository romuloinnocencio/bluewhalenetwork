<?php 

	$name  		= $_POST["name"];
	$age   		= $_POST["age"];
	$phone 		= $_POST["phone"];
	$email 		= $_POST["email"];
	$password 	= crypt($_POST["password"] , 'salt');

	#############
	### MYSQL
	#############

	#$con = mysqli_connect("localhost", "root", "123", "aula");
	#mysqli_query( $con, "INSERT INTO agenda (name, age, phone, email, password) VALUES ('$name',$age,'$phone','$email','$password')");

	#############
	### POSTGRE
	#############	

	$con = pg_connect("host=localhost port=5432 dbname=aula user=postgres password=123");
	pg_query( $con, "INSERT INTO agenda (name, age, phone, email, password) VALUES ('".$name."',".$age.",'".$phone."','".$email."','". $password ."')");

	header('Location: ver.php?logged=1');

?>