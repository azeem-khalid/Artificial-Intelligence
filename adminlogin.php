<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Login</title>
<!-- Meta tag Keywords -->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/font-awesomee.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="css/stylee.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<!-- //css files -->

</head>
<body>
		<!--header-->
		<div class="header-w3l">
			<h1>Admin Login</h1>
		</div>
		<!--//header-->
		<!--main-->
		<div class="main-w3layouts-agileinfo">
	           <!--form-stars-here-->
						<div class="wthree-form">
							<h2>Enter your UserName and Password</h2>
							<form action="adminlogin.php" method="post">
								<div class="form-sub-w3">
									<input type="text" name="Username" placeholder="Username " required="" />
								<div class="icon-w3">
									<i class="fa fa-user" aria-hidden="true"></i>
								</div>
								</div>
								<div class="form-sub-w3">
									<input type="password" name="Password" placeholder="Password" required="" />
								<div class="icon-w3">
									<i class="fa fa-unlock-alt" aria-hidden="true"></i>
								</div>
								</div>
								<div class="submit-agileits">
									<input type="submit" value="Login">
								</div>
							</form>

						</div>
				<!--//form-ends-here-->

		</div>
		<!--//main-->
</body>
</html>



<?php
	include('connection.php');

	if(isset($_POST['Username']) && isset($_POST['Password'])){
		
		$Username=$_POST['Username'];
		$Password=$_POST['Password'];
		
		if(!empty($Username) and !empty($Password)){
			$query="Select id from admin where username='$Username' and password='$Password'";

			if($exceute=mysqli_query($conn,$query)){
				$rows=mysqli_num_rows($exceute);	
				if($rows==0){
					header("Location:adminlogin.php");
				}
				else{
					header("Location:adminpage.php");

				}
			}
		
		}
		else{
			echo "Enter Username and Password";
		}
	}
	

?>