<?php 

	$email 		= $_POST["email"];
	$password 	= crypt($_POST["password"] , 'salt');

	#############
	### POSTGRE
	#############	

	$con = pg_connect("host=localhost port=5432 dbname=aula user=postgres password=123");
	$q = pg_query( $con, "SELECT * FROM agenda WHERE email='$email' AND password='$password'" );
	$cont = pg_num_rows($q);
	
	if( $cont > 0 ){
		session_start();
		$_SESSION["login"] = "logado";		
		$_SESSION["email"] = $email;
		header('Location: ../../pages/timeline.php');
	}
	else{
		header('Location: ../../pages/login.php?error=1');
	}

?>