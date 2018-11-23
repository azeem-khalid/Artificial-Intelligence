<html>
<link href="css/record1.css" rel='stylesheet' type='text/css' />

<body>

	<div class="banner" id="home">

  <header>
    <!-- <nav class="navbar navbar-default">
        <div class="navbar-header navbar-left">
          <div class="w3_navigation_pos">
            <h1><a href="restaurantpage.php"><span>H</span>ot <span>R</span>est</a></h1>
          </div>
        </div>
      </nav> -->
      <nav class="navbar navbar-default">
        <div class="navbar-header navbar-left">
          <div class="w3_navigation_pos">
            <br>
            <h1><a href="DineTake.html"><span>H</span>OT<span>R</span>EST</a></h1>
          </div>
        </div>
        <br>
        <!-- Collect the nav links, forms, and other content for toggling -->
        
      </nav>  
      
    </header>
<div>


<?php

class bill
{
	public $ord = array();
	public $ord1 = array();
	public $time=array();
	
	function generateBill()
	{
		global $ord;
		global $ord1;
		global $time;
// 		echo "<table style='width:100%' >";
// echo "<tr>
//         <th>#</th>
//         <th>FOOD NAME</th> 
//         <th></th> 
//         <th>PRICE</th>
//         <th></th> 
//         <th>QUANTITY</th>
//         <th></th> 
//       </tr>
//       ";





      

		$i=0;
		$nums=0;
		require 'connection.php';
		$sql = "SELECT * FROM fooditem where id=(SELECT id from foodorder ORDER BY id DESC LIMIT 1 )";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
    		// output data of each row
    		while($row = $result->fetch_assoc()) {

        		$ord[$i]=$row["foodname"];
        		$ord1[$i]=$row["no"];
        		$i++;

    		}
		} 
		else 
		{
    		echo "0 results";
		}
    echo "<h4> YOUR ORDER </h4>";
		$sum=0;
		$ca=0;
		for ($i=0; $i < sizeof($ord); $i++) 
        { 
          	$temp=$ord[$i];
          	$temp1=$ord1[$i];
          	$ca++;
            $sql = "SELECT * from desifood where name='$temp'";
            $result = $conn->query($sql);

			if ($result->num_rows > 0) {
    		
    			while($row = $result->fetch_assoc()) {
    				$temp2=(($row["price"]) * $temp1);
            echo "<table style='width:100%'>";
    				echo "<tr>";
      				echo "<td>";echo $ca."-  ";echo "</td>";
     				echo "<td>";echo $temp;echo "</td>"; 
      				echo "<td>";echo $temp2;echo "</td>";
      				echo "<td>";echo $temp1;echo "</td>";
      				echo "</tr>";
	  				echo "</table>"; 
    				
    				$time[$nums]=$row["time"]+60;
					$sum=$sum+(($row["price"]) * $temp1);
					$nums++;
        		}
			} 
			else 
			{
    			echo "0 results";
			}
        }

        $cql = "SELECT id,cname from foodorder ORDER BY id DESC LIMIT 1 ";
      $result = $conn->query($cql);
      if ($result->num_rows > 0) {
        
          while($row = $result->fetch_assoc()) {
            $i=$row['id'];
            $n=$row['cname'];
      } 
    }
      $nm=max($time);
      $sum=$sum+100;
      $bql="Insert into restaurantbill (id,name,amount,time) Values('$i','$n','$sum','$nm')";
      $result = $conn->query($bql);
        echo "<br>";
        echo "<h4> YOUR BILL</h4>";
        echo "<br>";
        echo "<table style='width:100%' >";
echo "<tr>
        <th>BILL</th>
        <th>TIME</th>  
      </tr>
      ";
      echo "<tr>
        <td>$sum</td>
        <td>$nm minutes</td>  
      </tr>
      ";
      echo "</table>";



}




}

$food1=new bill();
// $food1->OrderedFood();  
$food1->generateBill();
?>
</div>


</div>

</body>
</html>