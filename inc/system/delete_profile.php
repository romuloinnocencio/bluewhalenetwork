<?php 

	$id = $_GET["id"];

	#############
	### MYSQL
	#############

	#$con = mysqli_connect("localhost", "root", "123", "aula");
	#mysqli_query( $con, "INSERT INTO agenda (name, age, phone, email, password) VALUES ('$name',$age,'$phone','$email','$password')");

	#############
	### POSTGRE
	#############	

	$con = pg_connect("host=localhost port=5432 dbname=aula user=postgres password=123");
	
	$del = pg_query( $con, "DELETE FROM agenda WHERE id=$id" );

	if( $del ){
		header('Location: ver.php?logged=1');
	}else{

		echo 
		'<p style="color: red; padding: 5px 10px; border: 1px solid red;">
			Erro no servidor, tente novamente!
		</p>';
	}

?>