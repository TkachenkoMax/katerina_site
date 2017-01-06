<!DOCTYPE html>
<html>
<head>
	<title>Новость</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css">
	<meta name="author" content="Katerina Kurshakova">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<?php require("popup.php") ?>
	<?php require("header.php") ?>
	
	<?php require_once('connect.php') ?>
	<?php $article = $_GET['article']; ?>
	<?php 
		$result = mysqli_query($connect, "SELECT * FROM news WHERE id = $article");
		$news = mysqli_fetch_array($result, MYSQLI_ASSOC);
		$var = $news['author'];
		$result = mysqli_query($connect, "SELECT login FROM users WHERE id = $var");
		$news_author = mysqli_fetch_array($result, MYSQLI_ASSOC);
	?>

	<div class="newsBIG">
		<?php require("sidebar.php") ?>
		
		<div class="news-content">
			<div class="news-title">
				<?php echo $news['title'] ?>
			</div>
			<div class="news-description">
				<?php echo $news['description'] ?>
			</div>
			<div class="news-text">
				<p><?php echo $news['text'] ?></p>
			</div>
			<div class="news-footer">
				<div class="news-date"><?php echo $news['date'] ?></div>
				<div class="news-author"><?php echo $news_author['login']; ?></div>
			</div>
		</div>
	</div>
	<?php require("footer.php") ?>
</body>
</html>