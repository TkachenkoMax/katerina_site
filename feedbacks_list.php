<!DOCTYPE html>
<html>
<head>
	<title>Обратная связь</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css">
	<meta name="author" content="Katerina Kurshakova">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
		#feedback-button{
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
			$result = mysqli_query($connect,"SELECT * FROM feedback ORDER BY id DESC");
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
							<td>Данные</td>
							<td>Тип</td>
							<td>Сообщение</td>
							<td>Файл</td>
							<td>Удалить</td>
						</tr>
					</thead>
					<?php while($feedback = mysqli_fetch_array($result)) { ?>
						<tr> 
							<td> 
								<?php echo $feedback['id']; ?> 
							</td>
							<td> 
								<div><b>Имя: </b><?php echo $feedback['name']; ?> </div>
								<div><b>E-mail: </b><?php echo $feedback['email']; ?> </div>
								<div><b>Телефон: </b><?php echo $feedback['phone']; ?> </div>
							</td>
							<td>
								<?php echo $feedback['type']; ?>
							</td>
							<td>  
								<?php echo $feedback['message']; ?>
							</td>
							<td>  
								<?php if($feedback['file']=="") { echo "Нет файла"; } else { echo "Есть файл"; } ?>
							</td>
							<td>
								<a href="delete_feedback_func.php?feed=<?php echo $feedback['id']; ?>"> <img src="images/delete.png" alt="delete feedback"/> </a> 
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