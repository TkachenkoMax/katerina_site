<!DOCTYPE html>
<html>
<head>
	<title>Пользователи</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css">
	<meta name="author" content="Katerina Kurshakova">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
		#users-button{
			text-decoration:underline;
		}
    </style>	
</head>
<body>
	<?php require("popup.php") ?>
	<?php require("header.php") ?>
	<?php 
		require_once('connect.php'); 
	?> 
	
	<?php 
		require_once('connect.php'); 

		if($_SESSION['is_admin'] == "0" || (!isset($_SESSION['id_user']))) {
			header( 'Location:access_denied.php' );
		}
		else{
			$result = mysqli_query($connect,"SELECT * FROM users");
	?> 

	<div class="adminpageBIG">
		<?php require("sidebar.php") ?>
		
		<div class="adminpage-content">
			<?php require("adminpage_controls.php") ?>
			
			<div class="admin-users-list">
				<table class="user-table">
					<thead>
						<tr>
							<td>ID</td>
							<td>E-mail</td>
							<td>Логин</td>
							<td>Удалить</td>
							<td>Сделать админом</td>
						</tr>
					</thead>
					<?php while($user = mysqli_fetch_array($result)) { ?>
						<tr> 
							<td> 
								<?php echo $user['id']; ?> 
							</td>
							<td> <?php if ($_SESSION['id_user'] == $user['id']) { ?>
									<a href="userpage.php"> <?php echo $user['email']; ?> </a> 
								<?php } else{ ?>
									<a href="profile_view.php?id=<?php echo $user['id']; ?>"> <?php echo $user['email']; ?> </a> 
								<?php } ?>
								<?php if ($user['id'] == $_SESSION['id_user']) echo "(Вы)"; ?>
							</td>
							<td> <?php echo $user['login']; ?> </td>
							<td> <a href="delete_user_func.php?id=<?php echo $user['id']; ?>"> <img src="images/delete.png" alt="delete user"/></a> </td>
							<td> 
								<?php if ($user['is_admin'] == 1) { echo "Уже админ"; } else { ?>
									<a href="set_admin_func.php?id=<?php echo $user['id']; ?>"> <img src="images/accept.png" alt="set admin"/></a> 
								<?php } ?>
							</td>
						</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
		<?php } ?>
	<?php require("footer.php") ?>
</body>
</html>