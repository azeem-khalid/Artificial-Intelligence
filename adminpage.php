
<!DOCTYPE html>
<head>
<title>HOTREST</title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/1bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/1style.css" rel='stylesheet' type='text/css' />
<link href="css/1style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->

<link rel="stylesheet" href="css/1font.css" type="text/css"/>
<link href="css/1font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/1morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="css/1monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="adminpage.php" class="logo">
        Manager
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="images/2.png">
                <span class="username">Admin</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="adminlogin.php"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="adminpage.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li>
                    <a href="javascript:;">
                        <i></i>
                        <span><a href="manager.php">Data Tables</a></span>
                    </a>
                </li>

    </div>
</aside>
<!--sidebar end-->
<!--main content start-->



<section id="main-content">
	<section class="wrapper">
		<!-- //market-->
		<div class="market-updates">
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-2">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-eye"> </i>
					</div>
					 <div class="col-md-8 market-update-left">
					 <h4>Rooms</h4>

<?php
					include('connection.php');
					$query="Select * from rooms";
					$result=mysqli_query($conn,$query);
					$num_rows_room=mysqli_num_rows($result);


					echo "<h3>"; echo $num_rows_room; echo"</h3>";
?>
					<p>Including different catorgies</p>
				  </div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-users" ></i>
					</div>
					<div class="col-md-8 market-update-left">
					<h4>Customers</h4>
<?php
					include('connection.php');
					$query2="Select * from customerdata";
					$result2=mysqli_query($conn,$query2);
					$num_rows_customer=mysqli_num_rows($result2);
					echo "<h3>"; echo $num_rows_customer; echo"</h3>";
?>						
						<p>Hotel Customers</p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-3">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-usd"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>Transport</h4>

<?php
					include('connection.php');
					$query1="Select * from transport";
					$result1=mysqli_query($conn,$query1);
					$num_rows_transport=mysqli_num_rows($result1);
					echo "<h3>"; echo $num_rows_transport; echo"</h3>";
?>
						<p>Pick-N-Drop Services</p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-4">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
					</div>
					<div class="col-md-8 market-update-left">

					<h4>Food Items</h4>
<?php
					include('connection.php');
					$query1="Select * from desifood";
					$result1=mysqli_query($conn,$query1);
					$num_rows_food=mysqli_num_rows($result1);
					echo "<h3>"; echo $num_rows_food; echo"</h3>";
?>
						<p>Delicious Food</p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		   <div class="clearfix"> </div>
		</div>	
		<!-- //market-->
				</div>
			</div>
		</div>
		<div class="agil-info-calendar">
		<!-- calendar -->
		<div class="col-md-6 agile-calendar">
			<div class="calendar-widget">
                <div class="panel-heading ui-sortable-handle">
					<span class="panel-icon">
                      <i class="fa fa-calendar-o"></i>
                    </span>
                    <span class="panel-title"> Calendar Widget</span>
                </div>
				<!-- grids -->
					<div class="agile-calendar-grid">
						<div class="page">
							
							<div class="w3l-calendar-left">
								<div class="calendar-heading">
									
								</div>
								<div class="monthly" id="mycalendar"></div>
							</div>
							
							<div class="clearfix"> </div>
						</div>
					</div>
			</div>
		</div>
		<!-- //calendar -->
		<div class="col-md-6 w3agile-notifications">
			<div class="notifications">
				<!--notification start-->
				
					<header class="panel-heading">
						Feedback 
					</header>

					<?php

					for($x=1;$x<3;$x++){
						
						$query3="Select * from feedback where CusID=$x";

						if($myData = mysqli_query($conn,$query3)){
						
							while($record = mysqli_fetch_array($myData)){
							echo "<div class='notify-w3ls'>
							<div class='alert alert-info clearfix'>
							<span class='alert-icon'><i class='fa fa-envelope-o'></i></span>
							<div class='notification-info'>
								<ul class='clearfix notification-meta'>
									<li class='pull-left notification-sender'><span><a href='#'>"; echo $record['Name']; echo"</a></span></li>
								</ul>
								<p>";
									echo $record['Message'];
								echo"</p>
							</div>
							</div>";
							}

						}
					
					}

					?>
					
				
				<!--notification end-->
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
			<!-- tasks -->
			
		<!-- //tasks -->
		<div class="agileits-w3layouts-stats">
					<div class="col-md-4 stats-info widget">
						<div class="stats-info-agileits">
							<div class="stats-title">
								<h4 class="title">Hotel Stats</h4>
							</div>
							<div class="stats-body">
								<ul class="list-unstyled">
<?php
									$query11="Select * from rooms where Status='Reserved' ";
									$result11=mysqli_query($conn,$query11);
									$num_rows_roomres=mysqli_num_rows($result11);
									echo "<li>Rooms Booked <span class='pull-right'>"; echo $num_rows_roomres; echo"</span>";
?>


<?php
									$query12="Select * from transport where Status='Reserved' ";
									$result12=mysqli_query($conn,$query12);
									$num_rows_transportres=mysqli_num_rows($result12);
									echo"</li>";
									echo"<li>Transport Booked <span class='pull-right'>"; echo $num_rows_transportres; echo"</span>"; 
?>

<?php										
									$query13="Select * from billing where Status='Pending' ";
									$result13=mysqli_query($conn,$query13);
									$num_rows_billres=mysqli_num_rows($result13);
									echo"</li>";
									echo "<li>Bills Pending <span class='pull-right'>"; echo $num_rows_billres; echo"</span>";  
?>										

									</li> 
								</ul>
							</div>
						</div>
					</div>
					
</section>
 
</section>
<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->	
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   

		
	   
	});
	</script>
<!-- calendar -->
	<script type="text/javascript" src="js/monthly.js"></script>
	<script type="text/javascript">
		$(window).load( function() {

			$('#mycalendar').monthly({
				mode: 'event',
				
			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
	</script>
	<!-- //calendar -->
</body>
</html>
