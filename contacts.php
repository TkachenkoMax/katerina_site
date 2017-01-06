<!DOCTYPE html>
<html>
<head>
	<title>Контакты и обратная связь</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css">
	<meta name="author" content="Katerina Kurshakova">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<?php require("popup.php") ?>
	<?php require("header.php") ?>

	<div class="contactsBIG">
		<?php require("sidebar.php") ?>
		
		<div class="contacts-content">
			<div class="contacts-map">
				<div>
					<p class="contacts-title">Здесь я учусь:)</p>
				</div>
				<div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1524.7554412321683!2d36.229709877002264!3d50.00530521922434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2c717d8cad400691!2z0KXQsNGA0LrRltCy0YHRjNC60LjQuSDQvdCw0YbRltC-0L3QsNC70YzQvdC40Lkg0YPQvdGW0LLQtdGA0YHQuNGC0LXRgiDRltC80LXQvdGWINCSLtCdLiDQmtCw0YDQsNC30ZbQvdCw!5e0!3m2!1sru!2sua!4v1479941263693" width="700" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>				
				</div>
			</div>
			<div class="contacts-info">
				<div>
					<p class="contacts-title">Информация</p>
				</div>
				<div class="contacts-list">
					<span><b>Адрес</b>: Харьков, где-то на Киевской<br/></span>
					<span><b>Телефон</b>: +38(097)577-80-01<br/></span>
					<span><b>E-mail</b>: admin@marphinia.ua<br/></span>
				</div>
			</div>
			<div class="contacts-feedback">
				<div>
					<p class="contacts-title">Обратная связь</p>
				</div>
				<div class="feedback-form">
					<form method="post" action="feedback_func.php">
						<div id="feedback-nte">
							<input type="text" placeholder="Имя" name="name" required></input>
							<input type="phone" placeholder="Телефон" name="phone" required></input>
							<input type="email" placeholder="E-mail" name="email" required></input>
						</div>
						<div id="feedback-t">
							<select name="type">
								<option>Жалоба</option>
								<option>Предложение</option>
								<option>Заявка</option>
							</select>
						</div>
						<div id="feedback-m">
							<textarea placeholder="Текст сообщения" maxlength=256 name="message" required></textarea>
						</div>
						<div id="feedback-f">
							<input type="file" name="file"/>
						</div>
						<div id="feedback-s">
							<input type="submit" name="submit"></input>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php require("footer.php") ?>
</body>
</html>