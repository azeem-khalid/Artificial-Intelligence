<?php

header("Location:hotrest.html");
Class Transport{
	public $customername;
	public $customercnic;
	public $customernum;
	function checkreserved()
	{
		include('connection.php');
		$customername=$_POST["cusname"];
		$customercnic=$_POST["cuscnic"];
		$customerphone=$_POST["cusphone"];
		$customertransdate=$_POST["cusdate"];
		$customertranstime=$_POST["custime"];
		echo $customertransdate;

		$sql="Select * from customerdata where CNIC='$customercnic'"; 

			if($myData = mysqli_query($conn,$sql)){
				

				if(mysqli_num_rows($myData)==0){
				 	echo "Not reserved";
				}

				else{

					echo "ok";
					while($record = mysqli_fetch_array($myData)){
						echo $record['CheckIN'];
						$checkdate1=$record['CheckIN'];
						if($checkdate1==$customertransdate){
							echo "hogaya";
							//function assign transport
							$countt=0;
							$query1="Select * from transport where Status='Waiting' ";
							if($data=mysqli_query($conn,$query1)){
								if(mysqli_num_rows($data)==0){
									header("Location:roomcheck.php");
									echo "Driver Not Available";
								}
								else{
									echo "hi1";
									while($rec=mysqli_fetch_array($data)){
										if($countt<1){
											echo "hi2";
											$driver1=$rec['DriverName'];
											$status1=$rec['Status'];
											$countt++;
										}
									}
									$countt=0;
									echo $driver1;
									$que="Update transport SET Status='Reserved' where DriverName='$driver1'";
									if($data1=mysqli_query($conn,$que)){
										$query2="Select * from billing where CNIC='$customercnic' ";

										if($get=mysqli_query($conn,$query2)){
											if(mysqli_num_rows($get)>0){
												while($find=mysqli_fetch_array($get)){
													$bill=$find['Amount'];
													$bill=$bill+100;
												}

												$query3="Update billing SET Amount='$bill' where CNIC='$customercnic' ";
												if($done=mysqli_query($conn,$query3)){
													echo "khatam";
												}

												$query4="Insert into booking(CustomerName,DriverName,CNIC,Date,Time) values ('$customername','$driver1','$customercnic','$customertransdate','$customertranstime') ";

												if($final=mysqli_query($conn,$query4)){
													echo "finally";
												}
											}	
										}
									}
								}
							}
						}
					}
			
				}			
			}
	}
}
$trans=new Transport();
$trans->checkreserved();
?>