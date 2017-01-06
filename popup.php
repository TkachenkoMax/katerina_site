<div class="popup">
	</div>
	<div class="regform">
		<div class="close-button">
			<img class="close-button-pic" src="images/close.png" width="32px" height="32px"/>
		</div>
		<div class="log-reg-title">Регистрация</div>
		<form action="signup_func.php" id="loginform" method="post" name="regform">
			<div class="log-reg-left">
				<span>Логин</span>
				<span>Почта</span>
				<span>Пароль</span>
				<span>Повторите пароль</span>
			</div>
			<div class="log-reg-right">
				<input type="text" name="login" maxlength="16" required/>
				<input type="email" name="email" maxlength="32" required/>
				<input type="password" name="password" maxlength="16" required/>
				<input type="password" name="confirmpassword" maxlength="16" required/>
			</div>
			<div class="log-reg-bottom">
				<input name="submit" type="submit" class="submit" value="Зарегистрироваться"/>
			</div>
			<div id="to-login">Уже есть аккаунт? Войти!</div>
		</form>
	</div>
	<div class="logform">
		<div class="close-button">
			<img class="close-button-pic" src="images/close.png" width="32px" height="32px"/>
		</div>
		<div class="log-reg-title">Вход</div>
		<form action="login_func.php" id="loginform" method="post" name="loginform">
			<div class="log-reg-left">
				<span>Логин</span>
				<span>Пароль</span>
			</div>
			<div class="log-reg-right">
				<input type="text" name="login" maxlength="16" required/>
				<input type="password" name="password" maxlength="16" required/>
			</div>
			<div class="log-reg-bottom">
				<input name="submit" type="submit" class="submit" value="Войти"/>
			</div>
			<div id="to-reg">Нет аккаунта? Сделать!</div>
		</form>
	</div>