<!DOCTYPE html>
<html>
<head>	
	<?php include_once 'inc/head/head.php' ?>
	<title> BlueWhale - Register </title>
</head>
<body class="page-register">

	<?php include_once 'inc/system/connection.php' ?>

	<div class="topbar">
		<div class="text-center">
			<img src="images/logo.svg" width="100" height="100">
		</div>		
	</div>
	
	<section class="content">

		<header>
			<h2 class="c-white text-center">Join Our Community</h2>
		</header>

		<form id="formCadastro" action="grava.php" method="post">
			
			<p>
				<label for="name"> Name: </label>
				<input type="text" id="name" name="name">
			</p>

			<p>
				<label for="age"> Age: </label>
				<input type="number" id="age" name="age">
			</p>

			<p>
				<label for="birthdate"> Birthdate: </label>
				<input type="date" id="birthdate" name="birthdate">
			</p>				

			<p>
				<label for="phone"> Phone: </label>
				<input type="tel" id="phone" name="phone">
			</p>

			<p>
				<label for="email"> E-mail: </label>
				<input type="email" id="email" name="email">				
			</p>

			<p>
				<label for="password"> Password: </label>
				<input type="password" id="password" name="password">
			</p>

			<p>
				<input type="submit" value="gravar">
			</p>		

		</form>

	</section>	

</body>
</html>