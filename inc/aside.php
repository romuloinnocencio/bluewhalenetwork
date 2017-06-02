<?php 
	session_start();	
	$p_email = $_SESSION["email"];
?>

<aside class="aside">
		
	<a class="logo" href="../pages/timeline.php"" title="My profile">
		<img src="../../images/logo.svg" width="70" height="70">
	</a>

	<div class="profile-name">
		welcome back,
		<p>
		<?php 
			$q_name = pg_query( $con, "SELECT name FROM agenda WHERE email='$p_email'");
			$name = pg_fetch_array($q_name);
			echo $name["name"];
		?>
		</p>

		<?php 
			$q_img = pg_query( $con, "SELECT photo FROM agenda WHERE email='$p_email'");
			$img = pg_fetch_array($q_img);
			echo '<img src="'. $img["photo"] .'" alt="' . $name["name"] . '">';
		?>
	</div>

	<hr>

	<div class="profile-actions">

		<a href="../pages/profile.php"> my profile </a>
		<a href="../pages/timeline.php"> timeline </a>
		<a href="../pages/albuns.php"> my pictures </a>
		
	</div>

	<a href="../inc/system/logout.php" class="btn-close"> logout </a>

</aside>