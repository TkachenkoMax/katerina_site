<?php 
	session_start(); 
	require('connect.php');
	
	if($_SESSION['is_admin'] == "0" || (!isset($_SESSION['id_user']))) {
		header( 'Location:access_denied.php' );
	}
	else{
	
		$id = $_GET['id'];

		if ($id == $_SESSION["id_user"]) {
			echo "You cant delete yourself";
		} else {
			$result = mysqli_query($connect, "DELETE FROM users WHERE id = $id"); 
		}
	
		header( 'Location:users_list.php' );
	}
?>