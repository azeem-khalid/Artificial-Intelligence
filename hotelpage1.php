<?php
	
	header("Location:roomcheck.php");
		
	// $Customername=$_POST["name"];
	// $Customercnic=$_POST["cnic"];
	// $Customeremail=$_POST["e-mail"];
	// $CustomerCheckIN=$_POST["checkin"];
	// $CustomerCheckOut=$_POST["checkout"];
	// $Roomtype=$_POST["roomtype"];

	// include('connection.php');


	// $query="Insert INTO customerdata(Name,E-mail,CNIC,Check-IN,Check-Out,Room-type) VALUES ('$Customername','$Customeremail','$Customercnic','$CustomerCheckIN','$CustomerCheckOut','$Roomtype')";
	// if(mysqli_query($conn,$query)){
	// 	echo "New Record";
	// }
	// else{
	// 	echo "Error" ;
	// }
	Class Customer {
		public $customername;
		public $customercnic;
		public $customeremail;
		public $customercheckin;
		public $customercheckout;
		public $customerphone;
		public $customerroomtype;

		function updatedataofcustomer(){

			$customername=$_POST["name"];
			$customercnic=$_POST["cnic"];
			$customeremail=$_POST["e-mail"];
			// $msg="hi";
			// if(mail("aleemzulfiqar7@gmail.com","checking",$msg)){
			// 	echo "sent";
			// }
			// else{
			// 	echo "problem";
			// }
			$customercheckin=$_POST["checkin"];
			$customercheckout=$_POST["checkout"];
			$customerphone=$_POST["number"];
			$customerroomtype=$_POST["roomname"];

			//include('connection.php');
			
			
		}


		
		function addentry(){
			
			
		
		}

		function addbill(){

			

		}

	}


	Class Booking{

		function bookroom(){
			include('connection.php');
			$customername=$_POST["name"];
			$customercnic=$_POST["cnic"];
			$customeremail=$_POST["e-mail"];
			$customerphone=$_POST["number"];
			$customercheckin=$_POST["checkin"];
			$customercheckout=$_POST["checkout"];

			$checkcnic=strlen($customercnic);
			$checkphone=strlen($customerphone);
			$d1=strtotime($customercheckin);
			$check=date("Y", $d1);
			$d2=strtotime($customercheckin);
			$check2=date("Y", $d2);
			$cd=strtotime($customercheckin);
			$datecheck=date("d",$cd)-date("d");
			$month=strtotime($customercheckin);
			$checkinmonth=date("m", $month);


if (  (!filter_var($customeremail, FILTER_VALIDATE_EMAIL)) ||  ($checkcnic!=13)  ||  ($checkphone!=11) || ($check!=2017) || ($check2!=2017) || ($datecheck>5) || ($checkinmonth!=11) ) {
 		header("Location:roomcheck.php");
} 
			else{


			
			$customerroomtype=$_POST["roomname"];
			$count=0;
			$amount=0;
			$amountvip=1000;
			$amountdr=500;
			$amountsr=300;
			$id1;
			$noofdays1=0;
			$customerroomtype=$_POST["roomname"];
			$customercheckin=$_POST["checkin"];
			$customercheckout=$_POST["checkout"];
			
			
			$now = strtotime($customercheckin);
			$your_date = strtotime($customercheckout);
			$datediff =	$your_date- $now;

			$datediff1=floor($datediff/3600/24);
			while($noofdays1<$datediff1){
				$noofdays1++;
			}
			$noofdays1++;
			
			if($customerroomtype=='VIP'){
				if($noofdays1==0){
					$amount=$amountvip;
				}
				else{
					$amount=$amountvip*$noofdays1;	
				}
			}
			else if($customerroomtype=='SingleRoom'){
				if($noofdays1==0){
					$amount=$amountsr;
				}
				else{
					$amount=$amountsr*$noofdays1;
				}
			}
			else{
				if($noofdays1==0){
					$amount=$amountdr;
				}
				else{
					$amount=$amountdr*$noofdays1;	
				}
			}

			echo $amount;
			$sql="Select * from rooms where RoomType='$customerroomtype' and Status='Empty'"; 
			if($myData = mysqli_query($conn,$sql)){
				if(mysqli_num_rows($myData)==0){
				 	header("Location:roomcheck.php");
				 	echo "Room Not Available";
				}
				else{
					while($record = mysqli_fetch_array($myData)){

						if($count<1){
							$id1=$record['RoomNumber'];	
							$count++;
						}
					}
					$count=0;
					$query2="Update rooms SET Status='Reserved' where RoomNumber='$id1'";
					//echo $id1. "updated";
					
					if($exceute2=mysqli_query($conn,$query2)){
							
						$query="Insert INTO customerdata(Name,CNIC,Email,CheckIN,CheckOUT,Roomtype,RoomNumber,PhoneNumber) VALUES ('$customername','$customercnic','$customeremail','$customercheckin','$customercheckout','$customerroomtype','$id1','$customerphone')";
						if(mysqli_query($conn,$query)){
	 						echo "New Record";
						}
						else{
	 						die('Invalid quSDery: ' . mysql_error());
						}	
						

						$queryget="Select * from customerdata";
						if($ans=mysqli_query($conn,$queryget)){
							while($idrecord=mysqli_fetch_array($ans)){
								$idget=$idrecord['CustomerID'];
							}

						}

						$query111="Insert INTO billing(CusID,Name,Phone,CNIC,Amount,Status) VALUES ('$idget','$customername','$customerphone','$customercnic','$amount','Pending')";
						if(mysqli_query($conn,$query111)){
	 						echo "New Bill";
						}
						else{
	 						die('Invalid query: ' . mysql_error());
						}


					}
					
					
				}			
			}
			}			
		}


	}

	$customerentry=new Customer();
	$book1=new Booking();
	$customerentry->updatedataofcustomer(); 
	//$customerentry->updateroom();
	$book1->bookroom();
?>