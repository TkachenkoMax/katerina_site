<!DOCTYPE html>
<html>
<head>
	<title>Админ-панель</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css">
	<meta name="author" content="Katerina Kurshakova">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<?php require("popup.php") ?>
	<?php require("header.php") ?>
	<?php 
		require_once('connect.php'); 
		if($_SESSION['is_admin'] == "0" || (!isset($_SESSION['id_user']))) {
			header( 'Location:access_denied.php' );
		}
		else{
	?> 

	<div class="adminpageBIG">
		<?php require("sidebar.php") ?>
		<div class="adminpage-content">
			<?php require("adminpage_controls.php") ?>
		</div>
	</div>
	
	<?php } ?>
	<?php require("footer.php") ?>
</body>
</html>