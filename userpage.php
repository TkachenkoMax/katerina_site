<!DOCTYPE html>
<html>
<head>
	<title>Профиль</title>
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
		if(!isset($_SESSION['id_user'])) header( 'Location:access_denied.php' );
	?> 

	<div class="userpageBIG">
		<?php require("sidebar.php") ?>
		
		<div class="userpage-content">
			<div class="userpage-login"><?php echo $_SESSION["login"]; ?></div>
			<div class="userpage-photo">
				<img <?php if($_SESSION["sex"] == "Мужской" || $_SESSION["sex"] == "") { ?> src="images/male.png" <?php } ?> <?php if($_SESSION["sex"] == "Женский") { ?> src="images/female.png" <?php } ?> alt="фото"/>
			</div>
			<div class="userpage-info">
				<span><b>E-mail: </b><?php echo $_SESSION["email"]; ?></br></span>
				<span><b>Имя: </b><?php 
				if ($_SESSION["name"]=="") 
					echo "Не заполнено";
				else
					echo $_SESSION["name"]; ?></br></span>
				<span><b>Пол: </b><?php 
				if ($_SESSION["sex"]=="") 
					echo "Не заполнено";
				else
					echo $_SESSION["sex"]; ?></br></span>
				<span><b>Откуда: </b><?php 
				if ($_SESSION["city"]=="") 
					echo "Не заполнено";
				else
					echo $_SESSION["city"]; ?></br></span>
			</div>
			<div class="userpage-change-button"><a href="edit_profile.php">Редактировать</a></div>
		</div>
	</div>
	<?php require("footer.php") ?>
</body>
</html>