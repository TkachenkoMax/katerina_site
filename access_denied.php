<!DOCTYPE html>
<html>
<head>
	<title>Отказано в доступе</title>
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
	?> 

	<div class="mainBIG">
		<?php require("sidebar.php") ?>
		
		<div class="main-content">
			<div class="access-denied-text">Отказано в доступе!</div>			
		</div>
	</div>
	<?php require("footer.php") ?>
</body>
</html>