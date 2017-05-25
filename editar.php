<?php 

	session_start();

	if( $_SESSION["login"] == "" )
		header("location: login.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Aula </title>
</head>
<body>

	<section id="update" style="margin: 0 auto; max-width: 600px;">
	
		<?php 

			$id = $_GET["id"];

			#############
			### MYSQL
			#############

			#$con = mysqli_connect("localhost", "root", "123", "aula");
			#$q = mysqli_query( $con, "ELECT * FROM agenda WHERE id=$id" );

			#############
			### POSTGRE
			#############	

			$con = pg_connect("host=localhost port=5432 dbname=aula user=postgres password=123");
			$q = pg_query( $con, "SELECT * FROM agenda WHERE id=$id ");

			$sql = pg_fetch_array($q);

			$name 	= $sql["name"];
			$age 	= $sql["age"];
			$phone 	= $sql["phone"];
			$email	= $sql["email"];

		?>

		<header>
			<h2>Alterar dados</h2>
		</header>

		<form id="formUpdate" action="update.php?id=<?=$id?>" method="post">
			
			<fieldset>

				<legend> Dados pessoais </legend>

				<p>
					<label for="name"> nome: </label>
					<input type="text" id="name" name="name" value="<?=$name ?>">
				</p>

				<p>
					<label for="age"> idade: </label>
					<input type="number" id="age" name="age" value="<?=$age ?>">
				</p>

				<p>
					<label for="phone"> telefone: </label>
					<input type="tel" id="phone" name="phone" value="<?=$phone ?>">
				</p>

				<p>
					<label for="email"> email: </label>
					<input type="email" id="email" name="email" value="<?=$email ?>">
				</p>

			</fieldset>

			<p>
				<input type="submit" value="atualizar">
			</p>		

		</form>

		<p>
			<a href="/ver.php?logged=1"> voltar </a>
		</p>	

	</section>	

</body>
</html>