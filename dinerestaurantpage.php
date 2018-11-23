<!DOCTYPE html>
<html lang="en">
<head>
<title>HOTREST</title>
<link href="css/bootstrap2.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome2.css" rel="stylesheet"> 
<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />


</head>
<body>
<!-- banner -->
	<div class="banner" id="home">
		<!-- header -->
		
		<header>
			<div class="container">

			<!-- navigation -->
			
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="w3_navigation_pos">
						<h1><a href="DineTake.html"><span>H</span>OT<span>R</span>EST</a></h1>
					</div>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--miranda">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item"><a href="dinerestaurantpage.php" class="menu__link">Home</a></li>
							<li class="menu__item"><a href="about.html" class=" menu__link">About</a></li>
							<li class="menu__item"><a href="gallery.html" class=" menu__link">Gallery</a></li>
							<li class="dropdown menu__item">
						
					</li>
							<li class="menu__item"><a href="contact2.html" class=" menu__link">Contact</a></li>
						</ul>
					</nav>
				</div>
			</nav>	
	
	
		<!-- //navigation -->
			</div>
		</header>
	<!-- //header -->
	<!-- banner-text -->
		<div class="banner-text"> 
			<h2>FABULOUS FOOD AT AFFORDABLE PRICES!</h2>
			<div class="book-form">
			<p>Reserve a table.</p>
			   <form action="dineorder.php" method="post" class="agile_form">
					<div class="col-md-3 form-date-w3-agileits">
							<label><i class="fa fa-calendar" aria-hidden="true"></i> Time :</label>
							<input name='time' value="<?php echo date("m:i:s a");  ?>" >
					</div>
					<div class="col-md-3 form-date-w3-agileits">
						        <label><i class="fa fa-calendar" aria-hidden="true"></i> Date :</label>
								<input  name ='date' value="<?php echo date("Y-m-d"); ?>">
								</div>
					<div class="col-md-3 form-left-agileits-w3layouts ">
							<label><i class="fa fa-users" aria-hidden="true"></i> No.of People :</label>
							<select required="required">
								<option></option>
								<option>1 Person</option>
								<option>2 People</option>
								<option>3 People</option>
								<option>4 People</option>
								<option>5 People</option>
								<option>More</option>
							</select>
					</div>
					
					<div class="col-md-3 form-left-agileits-submit">
						  <input type="submit" value="Book a table" class="agileinfo">
					</div>
				</form>
			</div>
		</div>
		<!-- gallery -->
	
	</div>

<?php
/**
* 
*/






class Restaurant 
{

	protected $name;
	protected $address;
	protected $noOfTables;

	
	function __construct()
	{
		echo "Restaurant is created";
	}



}



/**
* 
*/
class Menu 
{
	
	function __construct()
	{
		echo "Menu is created";
	}
}

/**
* 
*/
class food 
{
	
	function __construct()
	{
		echo "food is created";
	}
}



/**
* 
*/












?>

<!-- //Footer -->

	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<script src="js/particles.js"></script>
<script src="js/app.js"></script>
<!--gallery-->
<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems:4,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<!--gallery-->
<!-- Dropdown-Menu-JavaScript -->
			<script>
				$(document).ready(function(){
					$(".dropdown").hover(            
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
							$(this).toggleClass('open');        
						},
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
							$(this).toggleClass('open');       
						}
					);
				});
			</script>
		<!-- //Dropdown-Menu-JavaScript -->
<!-- Calendar -->
				<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->
 <!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<!--js for bootstrap working-->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- script-for-menu -->
					<script>					
						$("span.menu").click(function(){
							$(".top-nav ul").slideToggle("slow" , function(){
							});
						});
					</script>
					<!-- script-for-menu -->
</body>
</html>


