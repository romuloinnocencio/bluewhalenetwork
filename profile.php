<!DOCTYPE html>
<html>
<head>	
	<?php include_once 'inc/head/head.php' ?>
	<title> BlueWhale - My Death Profile </title>
</head>
<body class="page-profile">

	<?php include_once 'inc/system/connection.php' ?>

	<?php include_once 'inc/aside.php' ?>	

	<section class="content">

		<header>
			<h2 class="section-title">My profile</h2>
		</header>

		<form class="forms" id="formProfile" action="updateProfile.php" method="post">
			
			<p class="field">
				<label for="name"> About me: </label>
				<textarea name="profile-about" id="profile-about" rows="10"></textarea>
			</p>

			<p class="field">
				<label for="name"> Name: </label>
				<input type="text" id="name" name="name">
			</p>

			<p class="field">
				<label for="age"> Age: </label>
				<input type="number" id="age" name="age">
			</p>

			<p class="field">
				<label for="birthdate"> Birthdate: </label>
				<input type="date" id="birthdate" name="birthdate">
			</p>				

			<p class="field">
				<label for="phone"> Phone: </label>
				<input type="tel" id="phone" name="phone">
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
				<input class="btn-submit" type="submit" value="update profile">
			</div>		

		</form>

	</section>	

</body>
</html>