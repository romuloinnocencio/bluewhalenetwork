<?php 

	session_start();

	if( !isset($_SESSION['login'] ))
		header("location: login.php");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Lista de usuários </title>
</head>
<body>

	<section id="login" style="margin: 0 auto; max-width: 600px;">
	
		<header>
			<h2>Painel administrativo</h2>
			<a href="logout.php" style="float: right;"> sair </a>
		</header>

		<article>

			<header>Lista de usários </header>

			<p>
			<?php 

				#############
				### MYSQL
				#############

				#$con = mysqli_connect("localhost", "root", "123", "aula");
				#$q = mysqli_query( $con, "SELECT * FROM agenda" );

				#############
				### POSTGRE
				#############	

				$con = pg_connect("host=localhost port=5432 dbname=aula user=postgres password=123");
				$q = pg_query( $con, "SELECT * FROM agenda" );

				##############

				#MYSQL

				echo '<table class="table">
						<thead>
							<tr>					
								<th>ID</th>
								<th>Name</th>
								<th>Age</th>
								<th>Phone</th>
								<th>Email</th>
								<th></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
					 ';

				/*
				while( $u = mysqli_fetch_array($q) ){
					echo '<tr>';

					echo '<td>' . $u["id"] . '</td>' .
					     '<td>' . $u["name"] . '</td>' .
						 '<td>' . $u["age"] . '</td>' .
						 '<td>' . $u["phone"] . '</td>' .
						 '<td>' . $u["email"] . '</td>';

					echo '</tr>';
				}
				*/

				#POSTGRES
				
				while( $u = pg_fetch_array($q) ){
					echo '<tr>';

					echo '<td>' . $u["id"] . '</td>' .
					     '<td>' . $u["name"] . '</td>' .
						 '<td>' . $u["age"] . '</td>' .
						 '<td>' . $u["phone"] . '</td>' .
						 '<td>' . $u["email"] . '</td>' .
						 '<td> <a href="editar.php?id=' . $u["id"] .'"> alterar </a> </td>' .
						 '<td> <a href="excluir.php?id=' . $u["id"] .'"> excluir </a> </td>';

					echo '</tr>';
				}
				
				echo '</tbody></table> <hr> <p> Usários cadastrados: '. pg_num_rows($q) . '</p> <hr>';
			?>			
			</p>

		</article>		

		<p>
			<a href="singup.php?logged=1"> cadastrar usuário </a>
		</p>



	</section>	

</body>
</html>