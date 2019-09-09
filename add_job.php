<?php
	include 'db/connect.php';

	session_start();
	include("db/connect.php");
	$result=mysqli_query($con,"SELECT * FROM users");

	if(!isset($_SESSION['id']) && !isset($_SESSION['name']) && !isset($_SESSION['email']) && !isset($_SESSION['pass']) && !isset($_SESSION['location']) && !isset($_SESSION['phone']) && !isset($_SESSION['created_at']) && !isset($_SESSION['updated_at']))
	{
	  header("location: index.php");
	}

	//PARAM FORM CREATING
	$title = mysqli_real_escape_string($con, $_POST['title']);
	$des = mysqli_real_escape_string($con, $_POST['des']);
	$salary = mysqli_real_escape_string($con, $_POST['salary']);
	$loc = mysqli_real_escape_string($con, $_POST['loc']);
	$user_id = $_SESSION['id'];

	//QUERY
	$sql = "
	INSERT INTO post
	(title, des, salary, loc, created_at, updated_at, user_id)
	VALUES
	('$title', '$des', '$salary', '$loc', NOW(), NOW(), '$user_id')
	";

	mysqli_query($con, $sql);

	echo '<script language="javascript">
	    alert("Job posted successfully!");
	    top.location.href = "home.php"; //the page to redirect
	</script>';
?>