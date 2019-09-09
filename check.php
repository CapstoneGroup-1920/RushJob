<?php
	session_start();
	include("db/connect.php");

	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$pw = md5($pass);

	$sql="SELECT * FROM users where email='$email' AND pass='$pw'";
	$result=mysqli_query($con,$sql) or die();
	$count=mysqli_num_rows($result);
	$row=mysqli_fetch_assoc($result);

	$_SESSION['id']=$row['id'];
	$_SESSION['name']=$row['name'];
	$_SESSION['location']=$row['location'];
	$_SESSION['email']=$row['email'];
	$_SESSION['pass']=$row['pass'];
	$_SESSION['phone']=$row['phone'];
	$_SESSION['created_at']=$row['created_at'];
	$_SESSION['updated_at']=$row['updated_at'];

	if($count==1)
	{
		header("location: home.php");
	}
	else
	{
		echo '<script language="javascript">
	    alert("Incorrect Username and Password!");
	    top.location.href = "index.php"; //the page to redirect
	</script>';
	}
?>