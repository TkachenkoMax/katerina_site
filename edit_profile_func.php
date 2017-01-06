<?php 
	require_once("connect.php");
	if(isset($_POST['submit'])){
		session_start();
		$name = $_POST['name'];
		$sex = $_POST['sex'];
		$city = $_POST['city'];
		$id = $_SESSION["id_user"];
		
		$str_sql = "UPDATE users SET name='$name', sex='$sex', city='$city' WHERE id=$id";
		
		$_SESSION["name"] = $name;
		$_SESSION["sex"] = $sex;
		$_SESSION["city"] = $city;

		mysqli_query($connect, $str_sql) or die(mysqli_error());
	}

	header( 'Location:userpage.php' );
?>
