<!DOCTYPE html>
<html>
<head>	
	<?php include_once '../inc/head/head.php' ?>
	<title> BlueWhale - Forgot password </title>
</head>
<body class="page-login">

	<?php include_once '../inc/system/connection.php' ?>

	<section id="login" class="form__login">
	
		<header>
			<img src="../../images/logo.svg" width="100" height="100">
			<h4>Send my pass </h2>
		</header>

		<form id="formLogin" action="../inc/system/send_password.php" method="post" novalidate>
			
			<?php 

				if( @$_GET["send"] == 1 ){

					echo
						'<p class="msg-sucess">
							your password has send in your mail box!
						</p>';
					
				}
			?>

			<label for="email"> 
				<input class="input" type="email" id="email" name="email" placeholder="put your e-mail">				
			</label>

			<div class="text-center">
				<input type="submit" class="btn-submit" value="send me">
			</div>

			<div class="text-center">
				<a class="link" href="login.php"> back to login </a>
			</div>

		</form>

	</section>	

</body>
</html>