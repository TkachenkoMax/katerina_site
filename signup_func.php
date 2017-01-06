<?php 
	require_once("connect.php");
	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$login = $_POST['login'];
		$pass = $_POST['password'];
		$confirmpass = $_POST['confirmpassword'];
		
		if($confirmpass!=$pass) echo "Не совпадают пароли";
		else{$pass = md5($pass);
		
		$request = mysqli_query($connect, "SELECT email FROM users WHERE email = '$email'");
		$email_db = mysqli_fetch_array($request);
		if(!$email_db['email']=="") {
			echo "Такой e-mail уже зарегистрирован";
		}
		else{
			$request = mysqli_query($connect, "SELECT login FROM users WHERE login = '$login'");
			$login_db = mysqli_fetch_array($request);
			if(!$login_db['login']=="") echo "Такой login уже зарегистрирован";
			else{				
				$str_sql = "INSERT INTO users (email, password, login)VALUES('$email', '$pass', '$login')";
		
				mysqli_query($connect, $str_sql) or die(mysqli_error($connect));
		
				header( 'Location:index.php' );
			}
		}
		}
	}
?>