<?php

Class Billing{

	function getbillingdetailsandfeedback(){
		include('connection.php');

		$customername1=$_POST["cusname"];
		$customerphone1=$_POST["cusphone"];
		$customercnic1=$_POST["cuscnic"];
		$customermsg=$_POST["cusmsg"];
	

		$query1="Insert into feedback(Name,Message) values ('$customername1','$customermsg')";

		if(mysqli_query($conn,$query1)){
	 		echo "Thanks for your feedback";
		}
		else{
	 		die('Invalid query: ' . mysql_error());
		}

	}

	function printbillingrecord(){
		echo "<html>
  		<link href='css/record1.css' rel='stylesheet' type='text/css' />
  		<head>
		</head>
		<body>
		<br>
		<h1><a href='hotrest.html'>HOTREST</a></h1>
		<h1>Check Out Details</h1>
		<table style='width:100%''>
  		<tr>
    	<th>Name</th>
    	<th>PhoneNumber</th> 
    	<th>CNIC</th>
    	<th>Amount</th>
  		</tr>
  		<tr>";
  			
  		include('connection.php');
  		$customername1=$_POST["cusname"];
		$customerphone1=$_POST["cusphone"];
		$customercnic1=$_POST["cuscnic"];
  		$query="Select Amount from billing where CNIC='$customercnic1'";
		if($myData = mysqli_query($conn,$query)){
			if(mysqli_num_rows($myData)==0){
				echo "Details Not Available";
			}
		
			else{
				while($record = mysqli_fetch_array($myData)){
					$cusamount=$record['Amount'];	
				}
			

				echo"<td>";echo $customername1;echo"</td>";
    			echo"<td>";echo $customerphone1;echo"</td>"; 
    			echo"<td>";echo $customercnic1;echo"</td>";
    			echo"<td>";echo $cusamount;echo"</td>";

    	
			}
		}

  		
    	echo"	
  		</tr>
  		</table>
  		</body>
  		</html>";

	}

}

$bill1=new Billing();
$bill1->getbillingdetailsandfeedback();
$bill1->printbillingrecord();
?>