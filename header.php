<?php require_once('./connect.php') ?>

<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

<div class="header">
		<?php if(! isset($_SESSION["id_user"])) { ?>
			<div class="log-reg-buttons">
				<img id="login-button" src="images/login.png" alt="login"/>
			</div>
		<?php } else { ?>
			<div class="log-reg-buttons">
				<?php if ($_SESSION["is_admin"]==1){ ?><a href="adminpage.php"><img id="admin-button" src="images/admin.png" alt="admin"/></a><?php } ?>
				<a href="userpage.php"><img id="user-button" src="images/user.png" alt="user"/></a>
				<a href="logout_func.php"><img id="exit-button" src="images/exit.png" alt="exit"/></a>
			</div>
		<?php } ?>
		<div class="logo">
			<img src="images/logo.png" alt="logo" title="Marphinia"/>
		</div>
		<div class="menu">
			<ul>
				<li><a href="index.php">Главная</a></li>
				<li><a href="categories.php">Новости</a>
					<ul>
						<li><a href="services.php">Услуги</a></li>
						<li><a href="workshops.php">Семинары</a></li>
						<li><a href="education.php">Обучение</a></li>
					</ul>
				</li>
				<li><a href="contacts.php">Контакты</a></li>
			</ul>
		</div>
	</div>