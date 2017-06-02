<!DOCTYPE html>
<html>
<head>	
	<?php include_once '../inc/head/head.php' ?>
	<title> BlueWhale - Login </title>
</head>
<body class="page-login">

	<?php include_once '../inc/system/connection.php' ?>

	<section id="login" class="form__login">
	
		<header>
			<img src="../../images/logo.svg" width="100" height="100">
			<h2>BlueWhale Suicidal Network</h2>
		</header>

		<form id="formLogin" action="../inc/system/logar.php" method="post" novalidate>
			
			<label for="email"> 
				<input class="input" type="email" id="email" name="email" placeholder="input your e-mail">				
			</label>

			<label for="password"> 
				<input class="input" type="password" id="password" name="password" placeholder="password">
			</label>				

			<?php 

				if( @$_GET["error"] == 1 ){

					echo
						'<p class="msg-error">
							Usuário ou senha inválidos
						</p>';
					
				}
			?>

			<div>
				<small> <a class="link" href="forgot_password.php"> forgot you password? </a> </small>
			</div>

			<div class="text-center">
				<input type="submit" class="btn-submit" value="kill me">
				<a href="../inc/system/singup.php" class="btn-submit btn-singup"> Sing Up </a>
			</div>

		</form>

	</section>	

</body>
</html>