<?php
	session_start();
	require_once('connect.php');

	if(isset($_POST['submit'])) {
		$login = $_POST['login']; 
		$pass = $_POST['password'];
		$pass=md5($pass);

		$result = mysqli_query($connect,"SELECT * FROM users WHERE login = '$login' AND password = '$pass'");
		$user = mysqli_fetch_array($result, MYSQLI_ASSOC); 

		$_SESSION["email"] = $user['email'];
		$_SESSION["login"] = $user['login'];
		$_SESSION["id_user"] = $user['id'];
		$_SESSION["sex"] = $user['sex'];
		$_SESSION["city"] = $user['city'];
		$_SESSION["name"] = $user['name'];
		$_SESSION["is_admin"] = $user['is_admin'];

		if(isset($_SESSION["id_user"])) {
			header( 'Location:index.php' );
		}
	}
?>