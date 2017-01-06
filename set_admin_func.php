<?php 
	session_start(); 
	require('connect.php');
	if(!isset($_SESSION['id_user'])) header( 'Location:access_denied.php' );
	else{
		if($_SESSION['is_admin'] == "0") header( 'Location:access_denied.php' );
		else{
			$id = $_GET['id'];

			$result = mysqli_query($connect, "UPDATE users SET is_admin='1' WHERE id=$id"); 

			header( 'Location:users_list.php' );
		}
	}
?>