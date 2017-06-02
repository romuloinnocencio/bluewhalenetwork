<!DOCTYPE html>
<html>
<head>	
	<?php include_once '../head/head.php' ?>
	<title> BlueWhale - Sing up </title>
</head>
<body>

	<section id="singup" class="form__login">

		<header class="text-center">
			<img src="../../images/logo.svg" width="100" height="100">
			<h2 class="section-title is-small">Join Our Community</h2>
		</header>

		<form class="forms" id="formProfile" action="write_profile.php" method="post">

			<p class="field">
				<label for="name"> Name: </label>
				<input type="text" id="name" name="name">
			</p>

			<p class="field">
				<label for="birthdate"> Birthdate: </label>
				<input type="text" id="birthdate" name="birthdate">
			</p>				

			<p class="field">
				<label for="email"> E-mail: </label>
				<input type="email" id="email" name="email">				
			</p>

			<p class="field">
				<label for="password"> Password: </label>
				<input type="password" id="password" name="password">
			</p>

			<div>
				<input class="btn-submit" type="submit" value="register">
			</div>		

		</form>

	</section>	

</body>
</html>