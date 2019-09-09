<?php
	include 'db/connect.php';

	//PARAM FORM CREATING
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$location = mysqli_real_escape_string($con, $_POST['location']);
	$phone = mysqli_real_escape_string($con, $_POST['phone']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$pass = mysqli_real_escape_string($con, $_POST['pass']);
	$pw = md5($pass);

	//QUERY
	$sql = "
	INSERT INTO users
	(name, location, phone, email, pass, created_at, updated_at)
	VALUES
	('$name', '$location', '$phone', '$email', '$pw', NOW(), NOW())
	";

	mysqli_query($con, $sql);

	echo '<script language="javascript">
	    alert("Account created successfully!");
	    top.location.href = "index.php"; //the page to redirect
	</script>';
	
?>