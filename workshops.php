<!DOCTYPE html>
<html>
<head>
	<title>Семинары</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css">
	<meta name="author" content="Katerina Kurshakova">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<?php require("popup.php") ?>
	<?php require("header.php") ?>

	<div class="servicesBIG">
		<?php require("sidebar.php") ?>
		
		<div class="services-content">
			<div class="category-title">Семинары</div>
			<div class="category-news-left">
				<?php 
					$lastnews = mysqli_query($connect,"SELECT id, title, description, date, author FROM news WHERE category = 'Семинары' ORDER BY id DESC");
					$count = mysqli_num_rows($lastnews);
					for($i=0; $i<$count; $i=$i+2){
						mysqli_data_seek($lastnews, $i);
						$rown = mysqli_fetch_array($lastnews, MYSQLI_ASSOC);
						$author_id = $rown['author'];
						$result1 = mysqli_query($connect,"SELECT login FROM users WHERE id=$author_id");
						$news_author = mysqli_fetch_array($result1);
						$date_and_author = $rown['date'] . ', by ' . $news_author['login'];
				?>
				<a href="newspage.php?article=<?php echo $rown['id']; ?>"><div class="news-preview">
					<div class="news-preview-title"><?php echo $rown['title']; ?></div>
					<div class="news-preview-date-author"><?php echo $date_and_author; ?></div>
					<div class="news-preview-description"><p><?php echo $rown['description']; ?></p></div>
				</div></a>
				<?php } ?>
			</div>	    

			<div class="category-news-right">
				<?php 
					for($i=1; $i<$count; $i=$i+2){
						mysqli_data_seek($lastnews, $i);
						$rown = mysqli_fetch_array($lastnews, MYSQLI_ASSOC);
						$author_id = $rown['author'];
						$result1 = mysqli_query($connect,"SELECT login FROM users WHERE id=$author_id");
						$news_author = mysqli_fetch_array($result1);
						$date_and_author = $rown['date'] . ', by ' . $news_author['login'];
				?>
				<a href="newspage.php?article=<?php echo $rown['id']; ?>"><div class="news-preview">
					<div class="news-preview-title"><?php echo $rown['title']; ?></div>
					<div class="news-preview-date-author"><?php echo $date_and_author; ?></div>
					<div class="news-preview-description"><p><?php echo $rown['description']; ?></p></div>
				</div></a>
				<?php } ?>
			</div>
		</div>
	</div>
	<?php require("footer.php") ?>
</body>
</html>