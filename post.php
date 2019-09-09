<?php
	session_start();
	include("db/connect.php");
	$result=mysqli_query($con,"SELECT * FROM users");

	if(!isset($_SESSION['id']) && !isset($_SESSION['name']) && !isset($_SESSION['email']) && !isset($_SESSION['pass']) && !isset($_SESSION['location']) && !isset($_SESSION['phone']) && !isset($_SESSION['created_at']) && !isset($_SESSION['updated_at']))
	{
	  header("location: index.php");
	}

	//POST QUERY
	$sql = "SELECT * FROM post";
	$post = mysqli_query($con, $sql);


	include 'layouts/header.php';
?>

<body>
	<!--CONTAINER-->
	<div class="container-fluid">
		<center>
			<h1>Add New Job</h1>
		</center>
		
		<!--FORM-->

		<div class="card" style="margin-left: auto; margin-right: auto;">
		  <div class="card-body">
		  	<form method="POST" action="add_job.php" id="add-form">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Job Title</label>
			    <input type="text" class="form-control" name="title" id="title">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Description</label>
			    <textarea class="form-control" name="des" id="des"></textarea>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Salary</label>
			    <input type="number" class="form-control" name="salary" id="salary">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Location</label>
			    <textarea class="form-control" name="loc" id="loc"></textarea>
			  </div>
			  <input class="btn btn-success" type="submit" name="upload" value="Submit" id="submit-button">
			</form>
		  </div>
		</div>

		<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.3.min.js"></script>
		<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
		<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.min.js"></script>
		<script src="validation.js"></script>

		<br>
		<!--FORM END-->

	</div>
	<!--CONTAINER END-->
	<br>
</body>

<?php
	include 'layouts/footer.php';
?>