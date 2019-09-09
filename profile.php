<?php
	session_start();
	include("db/connect.php");
	$result=mysqli_query($con,"SELECT * FROM users");

	if(!isset($_SESSION['id']) && !isset($_SESSION['name']) && !isset($_SESSION['email']) && !isset($_SESSION['pass']) && !isset($_SESSION['location']) && !isset($_SESSION['phone']) && !isset($_SESSION['created_at']) && !isset($_SESSION['updated_at']))
	{
	  header("location: index.php");
	}

	$pw = md5($_SESSION['pass']);


	include 'layouts/header.php';
?>

<body>
	<!--CONTAINER-->
	<div class="container-fluid">
		<center>
			<h1>Profile</h1>
		</center>
		
		<!--POST-->

		<div class="card" style="margin-left: auto; margin-right: auto;">
            <div class="card-body">
                <form method="POST" action="register_process.php" id="profile-form">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your name" name="name" id="name" value="<?php echo $_SESSION['name'];?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <textarea class="form-control" placeholder="Present address" name="location" id="address"><?php echo $_SESSION['location'];?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone Number</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone number" name="phone" id="phone" value="<?php echo $_SESSION['phone'];?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" id="email" value="<?php echo $_SESSION['phone'];?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass" id="pass" value="<?php echo $pw;?>">
                  </div>
                  <input class="btn btn-info" type="submit" name="upload" value="Update Account" id="submit-button">
                </form>
            </div>
        </div>

        <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.3.min.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.min.js"></script>
        <script type="text/javascript">
          $(function(){
            $("#profile-form").validate({
              rules:{
                name:{
                  required: true
                },
                address:{
                  required: true
                },
                phone:{
                  required: true
                  digits: true
                },
                email:{
                  email: true
                }
              }
            });
          });
        </script>

		<br>
		<!--POST END-->

	</div>
	<!--CONTAINER END-->
	<br>
</body>

<?php
	include 'layouts/footer.php';
?>