<?php 
	require_once("connect.php");
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$type =$_POST['type'];
		$message =$_POST['message'];
		$file =$_POST['file'];
		
		$str_sql = "INSERT INTO feedback (name, phone, type, message, file, email)VALUES('$name', '$phone', '$type', '$message', '$file', '$email')";

		mysqli_query($connect, $str_sql) or die(mysqli_error($connect));
	}

	header( 'Location:contacts.php' );
?>