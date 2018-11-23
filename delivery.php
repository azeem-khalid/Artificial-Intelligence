<?php


class delivery
{

	function details()
	{
        echo "Azeem1";
		global $Lastestid;
		global $Latestname;
		require 'connection.php';
		$sql = "select id,cname from foodorder ORDER BY id DESC LIMIT 1 ";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
    		// output data of each row
    		while($row = $result->fetch_assoc()) {

        		$Lastestid=$row["id"];
        		$Latestname=$row["cname"];

    		}
		} 
		else 
		{
    		echo "0 results";
		}

		if(isset($_POST["submit"]))
        {
            echo "Azeem2";
        	$Address=$_POST["address"];
        	$Phone=$_POST["phone"];
        	$cnic=$_POST["cnic"];

            $checkcnic=strlen($cnic);
            $checkphone=strlen($Phone);

            $query="Select * from fooddelivery";
            $myData = mysqli_query($conn,$query);
            while($record = mysqli_fetch_array($myData)){

                $check=$record['email'];
                if($check==$cnic){
                    $cancel=1;
                    header("Location:deliveryDetails.php");
                }

            }

            if($cancel!=1){

            echo "Azeem13";
                if($checkcnic==13 && $checkphone==11){
                    $sql = "insert into fooddelivery (id,name,email,Address,phone) VALUES ('$Lastestid','$Latestname','$cnic','$Address','$Phone')";
                    mysqli_query($conn, $sql);  
                    header("Location:deliverynextOrder.php");  
                }
            }

            
        }
        header("Location:deliverynextOrder.php");
    }


}

$food1=new delivery();
$food1->details();


?>