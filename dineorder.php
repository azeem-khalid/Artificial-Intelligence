<html>
<link href="css/record1.css" rel='stylesheet' type='text/css' />

<body>

  <div class="banner" id="home">

  <header>
          <nav class="navbar navbar-default">
        <div class="navbar-header navbar-left">
          <div class="w3_navigation_pos">
            <h1><a href="dinerestaurantpage.php"><span>H</span>ot<span>R</span>est</a></h1>
          </div>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        
      </nav>  
      
    </header>





    <!-- <div class="container"> -->

  <form action="#" method="POST" class="agile_form">
  <label><i></i> Name :</label>
  <input name="name" placeholder="Name" type="text" required="required">
<?php
echo "</br>";

class Food
{
//public $naam[];
public $naam = array(); 
public $ord= array();
public $ord1= array();

function redirects()
{
  header('Location:dinenextOrder.php');
}
function start(){
global $naam;
global $ord;
global $ord1;
global $limits;
global $us2;
require 'connection.php';

echo "<table style='width:100%'>";
echo "<br>";
echo "<tr>
        <th>ID</th>
        <th>NAME</th> 
        <th></th> 
        <th>DESCRIPTION</th>
        <th></th> 
        <th>PRICE</th>
        <th></th> 
        <th>SERVING</th>

        <th>QUANTITY</th>
      </tr>
      ";

$count=-1;
$ca=0;

$query="SELECT * from desifood";
  if($myData = mysqli_query($conn,$query)){
    
      if(mysqli_num_rows($myData)==0){
         echo "No food available";
      }
    
      else{
          while($record = mysqli_fetch_array($myData)){
            //$naams[]=row;
            $identity[]=$record['id'];  
            $naam[]=$record['name'];
            $des[]=$record['description'];
            $pri[]=$record['price'];
            $quan[]=$record['quantity'];


            $count++;
            $ca++;


            echo "<tr>";
            echo "<td>";echo $ca."-  ";echo "</td>";
            echo "<td>";echo $naam[$count];echo "<td>"; 
            echo "<td>";echo $des[$count];echo "<td>";
            echo "<td>";echo $pri[$count];echo "<td>";
            echo "<td>";echo $quan[$count];echo "<td>";
            ?>
            
            <input type='text' name="checkk<?php echo $count;?>">
 
            <td><input type="checkbox" name="check<?php echo $count;?>" value="<?php echo $naam[$count]; ?>"></td>
            <?php
            ob_start();
            echo "</tr>";
            
         


            }

        echo "</table>";      

        
      }
  }






}

function start2()
{
        require 'connection.php';
        $query="SELECT * from desifood";
        $result=mysqli_query($conn,$query);  
        $rows = mysqli_num_rows($result);   
        $c=0;
        $limits=0;
        $in=0;
        $us2=$_POST["name"];
        while($c<$rows)
        {
          if(isset($_POST["check$c"]))
          {
            $ord[$in]=$_POST["check$c"];
            $ord1[$in]=$_POST["checkk$c"];
            $in++;
            $limits++;
                 
          }
          $c++;
        }
        date_default_timezone_set("Pakistan/Karachi");
        $tt=date("h");
        $cc=$tt+4;
        $ttt=date("$cc:i:sa");
        if(isset($_POST["done"]))
        {
          $sql = "INSERT INTO foodorder (cname,time)
          VALUES ('$us2','$ttt')";
          mysqli_query($conn, $sql);
        }


        $sql = "SELECT id FROM foodorder where cname='$us2'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) 
        {
          while($row = $result->fetch_assoc()) 
          {
            $oids=$row["id"];
          }
        } 
        echo $oids;



        if(isset($_POST["done"]))
        {
          for ($i=0; $i <$limits ; $i++) 
          { 
            $temp=$ord[$i];
            $temp1=$ord1[$i];
            $sql = "INSERT INTO fooditem (id,foodname,no)
            VALUES ('$oids','$temp','$temp1')";
            mysqli_query($conn, $sql);
          }
        }
}
  
  
}

$food1=new Food();
$food1->start();
if(isset($_POST['done'])){
  $food1->start2();  
  $food1->redirects();
}


?>
<br>
<input type='submit' value='Order!' name='done' class="agileinfo"/>
</form>
</div>
<!-- </div> -->
</body>
</html>