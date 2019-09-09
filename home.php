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

	<main class="mdl-layout__content">
		<!--JUMBOTRON-->
		<div class="jumbotron">
		  <center>
		  	<h1 class="display-4">Hello, Job Seekers!</h1>
			  <p class="lead">Welcome to Rush Job</p>
			  <p class="lead">
			    <div class="input-group" style="width: 70%;">
				  <input type="text" class="search_form" placeholder="Search...">
				  <div class="input-group-append">
				    <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored" style="background-color: white; color: grey;">
					  <i class="material-icons">search</i>
					</button>
				  </div>
				</div>
			  </p>
		  </center>
		</div>
		<!--JUMBOTRON END-->

		<!--PAGE CONTENT-->
    	<div class="page-content">

			<!--JOBS ROW-->
			<?php
				while($row = mysqli_fetch_array($post)){
			?>
				<div class="demo-card-wide mdl-card mdl-shadow--2dp">
				  <div class="mdl-card__title">
				    <h2 class="mdl-card__title-text">
				    	<a href="post_view.php?id=<?php echo $row['id']; ?>" class="card-title"><?php echo $row['title'];?></a>
				    </h2>
				  </div>
				  <div class="mdl-card__supporting-text">
				  	<?php echo $row['des'];?>
				  </div>
				  <div class="mdl-card__menu">
				    <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
				      <i class="material-icons">more_vert</i>
				    </button>
				  </div>
				</div>
				<br>
			<?php
			}
			?>

			<!--JOBS ROW END-->

    	</div>
    	<!--PAGE CONTENT END-->

  	</main>
</body>

<?php
	include 'layouts/footer.php';
?>