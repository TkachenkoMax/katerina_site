<!DOCTYPE html>
<html>
<head>
	<title>Marphinia</title>
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
		$result = mysqli_query($connect,"SELECT id, title, date FROM news ORDER BY id DESC LIMIT 10");
	?> 

	<div class="mainBIG">
		<?php require("sidebar.php") ?>
		
		<div class="main-content">
			<?php require("slider.php") ?>
			<div class="last-news">Последние новости</div>
			<?php while($news = mysqli_fetch_array($result)) { ?>
				<div class="startpage-news">
					<span id="start-news-date"><?php echo $news['date']; ?> </span> 
					<a href="newspage.php?article=<?php echo $news['id']; ?>"><span id="start-news-title"><?php echo $news['title']; ?> </span></a>
				</div>
			<?php } ?>
		</div>
	</div>
	<?php require("footer.php") ?>
</body>
</html>