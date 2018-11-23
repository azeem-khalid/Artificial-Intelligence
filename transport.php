
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
	<div class="banner1">
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
								<li><a href="hotelpage.php">Reservation</a></li>
								<li><a href="rooms.html">Rooms</a></li>
								<li><a href="roomcheck.php">Contact</a></li>
								<li><a href="checkout.php">Checkout</a></li>
								<li class="active"><a href="transport.php">Transport</a></li>
								<li><a href="Map.html">Map</a></li>
							</ul>
						</div>
						<!--/.navbar-collapse-->
					</nav>
					<div class="clearfix"> </div>

				<!-- search-scripts -->
					<script src="js/classie.js"></script>
					<script src="js/uisearch.js"></script>
					<script>
						new UISearch( document.getElementById( 'sb-search' ) );
					</script>
				<!-- //search-scripts -->

			</div>
		</div>
	</div>		
		<!-- banner -->
<!--start-contact-->
	<div class="contact">
		<div class="container">
			<div class="contact-top heading">
				<h3>Pick N Drop Service</h3>
			</div>
			<form action="transport1.php" method="post">
				<div class="contact-bottom">
				<input type="text" value="Name" name="cusname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" />
				<input type="text" value="Time" name="custime" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" />
				<input type="text" value="Phone" name="cusphone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" />
				<input type="text" value="CNIC" name="cuscnic" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Cnic';}" />
				<div class="col-md-3 dropdown-button">
				<div class="input-group">
				<input class="form-control has-dark-background" name="cusdate" id="slider-name" placeholder="Check-IN-DATE" type="date" required="">
				</div>
				</div>
				<div class="submit-btn">
				<input type="submit" value="Request Transport">
			</form>
				</div>
			</div>
		<!--end-contact-->
		<!--start-map-->
			
	<!--end-map-->
<!--start-date-piker-->
		<link rel="stylesheet" href="css/jquery-ui.css" />
		<script src="js/jquery-ui.js"></script>
			<script>
				$(function() {
				$( "#datepicker,#datepicker1" ).datepicker();
				});
			</script>
<!-- /End-date-piker -->
</body>
</html>


