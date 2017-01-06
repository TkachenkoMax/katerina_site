<!DOCTYPE html>
<html>
<head>
	<title>Изменить профиль</title>
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
		if((!isset($_SESSION['id_user']))) {
			header( 'Location:access_denied.php' );
		} else{
	?> 

	<div class="userpageBIG">
		<?php require("sidebar.php") ?>
		
		<form name="userinfo" method="post" action="edit_profile_func.php">
			<div class="userpage-content">
				<div class="userpage-login"><?php echo $_SESSION["login"]; ?></div>
				<div class="userpage-photo">
					<img <?php if($_SESSION["sex"] == "Мужской" || $_SESSION["sex"] == "") { ?> src="images/male.png" <?php } ?> <?php if($_SESSION["sex"] == "Женский") { ?> src="images/female.png" <?php } ?> alt="фото"/>
				</div>
				<div class="userpage-info">
					<span><b>E-mail: </b><?php echo $_SESSION["email"]; ?></br></span>
					
					<span><b>Имя: </b><input type="text" name="name" value="<?php echo $_SESSION['name'] ?>"/></span>
					<span><b>Пол: </b>
						<select name="sex">
							<option>Мужской</option>
							<option>Женский</option>
						</select>
					</span>
					
					<span><b>Откуда: </b><input type="text" name="city" maxlength="50" value="<?php echo $_SESSION['city'] ?>"/></span>
				</div>
				<div class="userpage-change-button"><input type="submit" value="Сохранить" name="submit"></input></div>
			</div>
		</form>
	</div>
	<?php } ?>
	<?php require("footer.php") ?>
</body>
</html>