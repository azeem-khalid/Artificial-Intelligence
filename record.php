<?php
	
	include('connection.php');

	$customername1=$_POST["cusname"];
	$customerphone1=$_POST["cusphone"];
	$customercnic1=$_POST["cuscnic"];

	
	
?>

<html>

<link href="css/record1.css" rel='stylesheet' type='text/css' />

<head>
</head>


<body>


	<br>
	<h1><a href="hotrest.html">HOTREST</a></h1>

	
	<h1>Your Room Reservation Details</h1>

	<table style="width:100%">
  		
  		<tr>
    		<th>Name</th>
    		<th>PhoneNumber</th> 
    		<th>CNIC</th>
    		<th>Room type</th>
    		<th>Room Number</th>
  		</tr>
  
  		<tr>
  			<?php

  			$query="Select RoomNumber,Roomtype from customerdata where CNIC='$customercnic1'";
			if($myData = mysqli_query($conn,$query)){
		
				if(mysqli_num_rows($myData)==0){
					echo "Room Not Available";
				}
		
				else{
					while($record = mysqli_fetch_array($myData)){

						$cusroomtype=$record['Roomtype'];	
						$cusroomnum=$record['RoomNumber'];
					}
			?>

					<td><?php echo $customername1; ?></td>
    				<td><?php echo $customerphone1; ?></td> 
    				<td><?php echo $customercnic1; ?></td>
    				<td><?php echo $cusroomtype; ?></td>
    				<td><?php echo $cusroomnum; ?></td>

    		<?php
				}
			}

  			?>
    		
  		</tr>
	
	</table>

</body>


</html>