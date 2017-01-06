<?php 
	session_start(); 
	require('connect.php');
	if($_SESSION['is_admin'] == "0" || (!isset($_SESSION['id_user']))) {
		header( 'Location:access_denied.php' );
	}
	else{
	
		$feed = $_GET['feed'];

		$result = mysqli_query($connect, "DELETE FROM feedback WHERE id = $feed"); 

		header( 'Location:feedbacks_list.php' );
	}
?>