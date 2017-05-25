<?php 

	session_start();

	if( $_SESSION["login"] == "" ){
		header("location: login.php");
	}

	$email 		= $_POST["email"];
	$password 	= crypt($_POST["password"] , 'salt');

	#############
	### POSTGRE
	#############	

	$con = pg_connect("host=localhost port=5432 dbname=aula user=postgres password=123");
	$q = pg_query( $con, "SELECT * FROM agenda WHERE email='$email' AND password='$password' " );
	$cont = pg_num_rows($q);
	
	##############

	#MYSQL
	/*
	while( $u = mysqli_fetch_array($q) ){
		echo $u["nome"] . ", <br>" .
			 $u["idade"] . ", <br>" .
			 $u["telefone"] . "<br><br>";
	}
	*/

	if( $cont > 0 ){
		$_SESSION["login"] = "logado";	
		header('Location: ver.php?logged=1');
	}
	else{
		header('Location: login.php?error=1');
	}

	#POSTGRES
	/*
	while( $u = pg_fetch_array($q) ){
		echo '<p>Name: ' . $u["name"] . ", <br>" .
			 'Age: ' . $u["age"] . ", <br>" .
			 'Phone: ' . $u["phone"] . ", <br>" .
			 'E-mail: ' . $u["email"].'<br>';
			 'Password: ' . $u["password"].'</p>';
	}
	*/
?>