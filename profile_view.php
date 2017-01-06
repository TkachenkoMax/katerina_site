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
	?> 
	
	<?php $id = $_GET['id']; ?>
    <?php 
		$result = mysqli_query($connect, "SELECT * FROM users WHERE id = $id");
		$user = mysqli_fetch_array($result, MYSQLI_ASSOC);
	?>

	<div class="userpageBIG">
		<?php require("sidebar.php") ?>
		
		<div class="userpage-content">
			<div class="userpage-login"><?php echo $user["login"]; ?></div>
			<div class="userpage-photo">
				<img <?php if($user["sex"] == "Мужской" || $user["sex"] == "") { ?> src="images/male.png" <?php } ?> <?php if($user["sex"] == "Женский") { ?> src="images/female.png" <?php } ?> alt="фото"/>
			</div>
			<div class="userpage-info">
				<span><b>E-mail: </b><?php echo $user["email"]; ?></br></span>
				<span><b>Имя: </b><?php 
				if ($user["name"]=="") 
					echo "Не заполнено";
				else
					echo $user["name"]; ?></br></span>
				<span><b>Пол: </b><?php 
				if ($user["sex"]=="") 
					echo "Не заполнено";
				else
					echo $user["sex"]; ?></br></span>
				<span><b>Откуда: </b><?php 
				if ($user["city"]=="") 
					echo "Не заполнено";
				else
					echo $user["city"]; ?></br></span>
			</div>
		</div>
	</div>
	<?php require("footer.php") ?>
</body>
</html>