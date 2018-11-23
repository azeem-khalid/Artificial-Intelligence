<!DOCTYPE HTML>
<html>
<head>
<title>HOTREST</title>
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap1.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style1.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery-1.11.1.min.js"></script>

<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
<!-- banner -->
	<div class="banner">
		<div class="header">
			<div class="container">
				<div class="logo">
					<h1><a href="hotrest.html">HOTREST</a></h1>
				</div>
					<nav class="navbar navbar-default" role="navigation">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!--/.navbar-header-->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="active"><a href="hotelpage.php">Reservation</a></li>
								<li><a href="rooms.html">Rooms</a></li>
								<li><a href="roomcheck.php">Contact</a></li>
								<li><a href="checkout.php">Checkout</a></li>
								<li><a href="transport.php">Transport</a></li>
								<li><a href="Map.html">Map</a></li>
							</ul>
						</div>
						<!--/.navbar-collapse-->
					</nav>
				
					<div class="clearfix"> </div>

				

			</div>
		</div>
		
		<div class="banner-info">
			<div class="container">
				<div class="details-1">
					<div class="col-md-10 dropdown-buttons">   
						<div class="col-md-3 dropdown-button">
						           			
						<form action="hotelpage1.php" method="post">           			
							<div class="input-group">
								<input class="form-control has-dark-background" name="name" id="slider-name" placeholder="Name" type="text" required="">
							</div>
							<div class="input-group">
								<input class="form-control has-dark-background" name="e-mail" id="slider-name" placeholder="E-mail" type="text" required="">
							</div>
						</div>


						<div class="col-md-3 dropdown-button">       			
						<!-- <form action="hotelpage.php" method="post"> -->
							<div class="input-group">
								<input class="form-control has-dark-background" name="cnic" id="slider-name" placeholder="CNIC" type="text" required="">
							</div>           			
							<div class="input-group">
								<input class="form-control has-dark-background" name="number" id="slider-name" placeholder="Phone-Number" type="text" required="">
							</div>
						</div>
						

						<div class="col-md-3 dropdown-button">           			
						<!-- <form action="hotelpage.php" method="post">  -->          			
							<div class="input-group">
								<input class="form-control has-dark-background" name="checkin" id="slider-name" placeholder="Check-IN-DATE" type="date" required="">
							</div>
							<div class="input-group">
								<input class="form-control has-dark-background" name="checkout" id="slider-name" placeholder="Check-Out-Date" type="date" required="">
							</div>
						</div>

						<div class="col-md-3 dropdown-button">
						  <div class="input-group">
								<input class="form-control has-dark-background" name="roomname" id="slider-name" placeholder="Room-type" type="text" required="">
							</div>
						  <div class="section_1" placeholder="ABC" name="xyz">
							 <select id="country" VALUE ="ABC" onchange="change_country(this.value)" class="frm-field required" name="xyz" placeholder="Types of Room">
								<option value="null" name="xyz">Double Room</option>
								<option value="null" name="xyz">Single Room</option>         
								<option value="AX" name="xyz">VIP</option>
							 </select>
						  </div>
						</div>
						  
						</div>

						<div class="col-md-3 dropdown-button">           			
						<!-- <form action="hotelpage.php" method="post">  -->          			
							<div class="submit-agileits">
						  	<br>
									<input type="submit" value="Reserve Room">
								</div>
						</div>

						</form>

						<div class="clearfix"> </div>
					</div> 
					

					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>		
	<!-- banner -->
	
	<!-- hod -->
	
	
	
	
</body>
</html>


