<!DOCTYPE html>
<html>
<head>	
	<?php include_once '../inc/head/head.php' ?>
	<title> BlueWhale - My Death Profile </title>
</head>
<body class="page-profile">

	<?php include_once '../inc/system/connection.php' ?>

	<?php include_once '../inc/aside.php' ?>	

	<section class="content">

		<header>
			<h2 class="section-title">Timeline</h2>
		</header>

		<form class="forms" id="formProfile" action="../inc/system/write_post.php" method="post" enctype="multipart/form-data">

			<p class="field">
				<textarea name="post_text" id="post_text" rows="8" placeholder="What are you thinking?"></textarea>
				<input type="file" id="picture" name="picture">
			</p>

			<div>
				<input class="btn-submit" type="submit" value="update profile">
			</div>		

		</form>

		<div class="forms is-post">
			<div> Postador por Nome</div>
			<div> Data postagem</div>
			<div>
				imagem postagem
			</div>
			<div>
				texto postagem
			</div>
		</div>

	</section>	

</body>
</html>