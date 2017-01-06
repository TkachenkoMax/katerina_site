<!DOCTYPE html>
<html>
<head>
	<title>Категории</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css">
	<meta name="author" content="Katerina Kurshakova">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<?php require("popup.php") ?>
	<?php require("header.php") ?>

	<div class="categoriesBIG">
		<?php require("sidebar.php") ?>
			<a href="services.php"><div class="categories-content">
				<div class="category-link">
				<img class="category-link-photo" src="images/category1.jpg" alt="cat1"/>
				<div class="category-link-text">Услуги</div>
			</div></a>
			<a href="workshops.php"><div class="category-link">
				<img class="category-link-photo" src="images/category2.jpg" alt="cat1"/>
				<div class="category-link-text">Семинары</div>
			</div></a>
			<a href="education.php"><div class="category-link">
				<img class="category-link-photo" src="images/category3.jpg" alt="cat1"/>
				<div class="category-link-text">Обучение</div>
			</div></a>
		</div>
	</div>
	<?php require("footer.php") ?>
</body>
</html>