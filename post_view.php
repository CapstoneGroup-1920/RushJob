<?php
	session_start();
	include("db/connect.php");
	$result=mysqli_query($con,"SELECT * FROM users");

	if(!isset($_SESSION['id']) && !isset($_SESSION['name']) && !isset($_SESSION['email']) && !isset($_SESSION['pass']) && !isset($_SESSION['location']) && !isset($_SESSION['phone']) && !isset($_SESSION['created_at']) && !isset($_SESSION['updated_at']))
	{
	  header("location: index.php");
	}

	$id = $_GET['id'];

	//POST QUERY
	$sql1 = "SELECT * FROM post WHERE id=$id";
	$post = mysqli_query($con, $sql1);
	//POST PARAM
	while($row = mysqli_fetch_array($post)){
		$p_title = $row['title'];
		$p_des = $row['des'];
		$p_salary = $row['salary'];
		$p_loc = $row['loc'];
		$p_created_at = $row['created_at'];
		$p_updated_at = $row['updated_at'];
	}

	//USER QUERY
	$sql2 = "SELECT * FROM users WHERE post_id=$id";
	$user = mysqli_query($con, $sql2);


	include 'layouts/header.php';
?>

<body>
	<!--CONTAINER-->
	<div class="container-fluid">
		<center>
			<h1>Job Posting Info</h1>
		</center> 

		<!--POST-->
		<div class="card" style="margin-left: auto; margin-right: auto;">
		  <div class="card-body">
		    <a href="" class="card-title" style="font-size: 30px;"><?php echo $p_title;?></a>
		    <br>
		    <p class="card-text" style="margin-left: 20px;"><b>Description:</b><br><?php echo $p_des;?></p>
		    <p class="card-text" style="margin-left: 20px;"><b>Salary:</b><br><?php echo $p_salary;?></p>
		    <p class="card-text" style="margin-left: 20px;"><b>Salary:</b><br><?php echo $p_loc;?></p>
		    <br>
			    <div class="float-right" style="font-size: 15px;">
				    <small>
				    	<i>date posted: <?php echo $p_created_at;?></i>
				    </small>
				    <br>
				    <small>
				    	<i>date updated: <?php echo $p_created_at;?></i>
				    </small>
				</div>
		  </div>
		</div>
		<!--POST END-->

	</div>
	<!--CONTAINER END-->
	<br>
</body>

<?php
	include 'layouts/footer.php';
?>