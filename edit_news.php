<!DOCTYPE html>
<html>
<head>
	<title>Изменить новость</title>
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
		} else{
			$id_article = $_GET['article'];
			$result = mysqli_query($connect, "SELECT * FROM news WHERE id = $id_article");
			$news = mysqli_fetch_array($result, MYSQLI_ASSOC);
	?> 

	<div class="adminpageBIG">
		<?php require("sidebar.php") ?>
		
		<div class="adminpage-content">
			<?php require("adminpage_controls.php") ?>
			<div class="create-news-content">
				<div class="create-news-title">Редактирование новости</div>
				<form class="post-form" action="edit_news_func.php?article=<?php echo $id_article; ?>" method="post">
					<div>
						<span><b>Заголовок:</b></span>
						<input type="text" name="title" value="<?php echo $news['title']; ?>" maxlength="100" required></input>
					</div>
					<div>
						<span><b>Категория:</b></span>
						<select name="category">
							<option>Услуги</option>
							<option>Семинары</option>
							<option>Обучение</option>
						</select>
					</div>
					<div><b>Краткое описание:</b></div>
					<textarea id="short_descr" maxlength="200" name="descr" required><?php echo $news['description']; ?></textarea>
					<div><b>Текст новости:</b></div>
					<textarea id="news_text" maxlength="2000" name="text" required><?php echo $news['text']; ?></textarea>
					<div class="send-news-but">
						<input type="submit" name="submit" value="Сохранить"></input>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php } ?>
	<?php require("footer.php") ?>
</body>
</html>