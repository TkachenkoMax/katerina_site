<?php 
	session_start(); 
	require('connect.php');
	if($_SESSION['is_admin'] == "0" || (!isset($_SESSION['id_user']))) {
		header( 'Location:access_denied.php' );
	}
	else{
	
		$article = $_GET['article'];

		$result = mysqli_query($connect, "DELETE FROM news WHERE id = $article"); 

		header( 'Location:news_list.php' );
	}
?>