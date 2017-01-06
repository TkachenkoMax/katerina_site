<!DOCTYPE html>
<html>
<head>
	<title>Новости</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css">
	<meta name="author" content="Katerina Kurshakova">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
		#news-button{
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
			$result = mysqli_query($connect,"SELECT id, title, category, author, date FROM news ORDER BY id DESC");
	?> 

	<div class="adminpageBIG">
		<?php require("sidebar.php") ?>
		
		<div class="adminpage-content">
			<?php require("adminpage_controls.php") ?>
			<div class="add-news-button"><a href="create_news.php">Добавить новость</a></div>
			<div class="admin-users-list">
				<table class="user-table">
					<thead>
						<tr>
							<td>ID</td>
							<td>Заголовок</td>
							<td>Категория</td>
							<td>Автор</td>
							<td>Дата</td>
							<td>Удалить</td>
							<td>Ред.</td>
						</tr>
					</thead>
					<?php while($news = mysqli_fetch_array($result)) { ?>
						<tr> 
							<td> 
								<?php echo $news['id']; ?> 
							</td>
							<td> 
								<a href="newspage.php?article=<?php echo $news['id']; ?>"> <?php echo $news['title']; ?> </a> 
							</td>
							<td> <?php echo $news['category']; ?> </td>
							<?php 
								$author_id = $news['author'];
								$result1 = mysqli_query($connect,"SELECT login FROM users WHERE id=$author_id");
								$news_author = mysqli_fetch_array($result1)
							?> 
							<td> <?php echo $news_author['login']; ?> </td>
							<td> <?php echo $news['date']; ?> </td>
							<td> <a href="delete_news_func.php?article=<?php echo $news['id']; ?>"> <img src="images/delete.png" alt="delete news"/> </a> </td>
							<td> <a href="edit_news.php?article=<?php echo $news['id']; ?>"> <img src="images/edit.png" alt="edit news"/></a> </td>
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