<?php

Class Manager{

    function startup(){
        echo
"<!DOCTYPE html>
<head>
<title>HOTREST</title>
<script type='application/x-javascript'> addEventListener('load', function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel='stylesheet' href='css/1bootstrap.min.css' >
<link href='css/1style.css' rel='stylesheet' type='text/css' />
<link href='css/1style-responsive.css' rel='stylesheet'/>
<link rel='stylesheet' href='css/1font.css' type='text/css'/>
<link href='css/1font-awesome.css' rel='stylesheet'> 
<script src='js/jquery2.0.3.min.js'></script>
</head>
<body>
<section id='container'>
<header class='header fixed-top clearfix'>
<div class='brand'>

    <a href='adminpage.html' class='logo'>MANAGER</a>
    <div class='sidebar-toggle-box'>
        <div class='fa fa-bars'></div>
    </div>
</div>
<div class='top-nav clearfix'>
    <!--search & user info start-->
    <ul class='nav pull-right top-menu'>
        <li>
            <input type='text' class='form-control search' placeholder=' Search'>
        </li>
        <!-- user login dropdown start-->
        <li class='dropdown'>
            <a data-toggle='dropdown' class='dropdown-toggle' href='#'>
                <span class='username'>Admin</span>
                <b class='caret'></b>
            </a>
            <ul class='dropdown-menu extended logout'>
                <li><a href='adminlogin.php'><i class='fa fa-key'></i> Log Out</a></li>
            </ul>
        </li>
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id='sidebar' class='nav-collapse'>
        <!-- sidebar menu start-->
        <div class='leftside-navigation'>
            <ul class='sidebar-menu' id='nav-accordion'>
                <li>
                    <a href='adminpage.php'>
                        <i class='fa fa-dashboard'></i>
                        <span>Dashboard</span>
                    </a>
                </li>
               
                <li class='sub-menu'>
                    <a class='active' href='javascript:;'>
                        <i class='fa fa-th'></i>
                        <span>Data Tables</span>
                    </a>
                    <form method='POST'>
                        <br>
                        <input type='submit' id='btnSubmit' name='table1' value='CUSTOMER Record'/>
                        <br><br>
                        <input type='submit' id='btnDelete' name='table2' value='BILLING Record'/>
                        <br><br>
                        <input type='submit' id='btnDelete' name='table3' value='Rooms Record'/>
                        <br><br>
                        <input type='submit' id='btnSubmit' name='table4' value='Transport Record'/>
                        <br><br>
                        <input type='submit' id='btnSubmit' name='table5' value='Food Record'/>
                        <br><br>
                        <input type='submit' id='btnSubmit' name='table6' value='RESTAURANT Billing Record'/>
                        <br><br>
                        <input type='submit' id='btnSubmit' name='table7' value='HOME DELIVERY'/>
                        <br><br>
                    </form>
                </li>
               
                
               
    </div>
</aside>
</section>
<script src='js/bootstrap.js'></script>
<script src='js/jquery.dcjqaccordion.2.7.js'></script>
<script src='js/scripts.js'></script>
<script src='js/jquery.slimscroll.js'></script>
<script src='js/jquery.nicescroll.js'></script>
<script src='js/jquery.scrollTo.js'></script>
</body>
</html>
";
}

    function design(){
        echo"<section id='main-content'>
        <section class='wrapper'>
        <div class='table-agile-info'>
        <div class='panel panel-default'>
        <div class='panel-heading'>
        RECORDS
        </div>
        <div>
        <table class='table' ui-jq='footable' ui-options='{
        'paging': {
          'enabled': true
        },
        'filtering': {
          'enabled': true
        },
        'sorting': {
          'enabled': true
        }}'>";

    }


    function getcustomerdetails(){
        include('connection.php');
       //design();
        echo "<thead>
            <tr>
            <th>CustomerID</th>
            <th>Name</th>
            <th>CNIC</th>
            <th>PhoneNumber</th>
            <th>Email</th>
           
            <th>Check-IN</th>
            <th>Check-Out</th>
            <th>RoomNumber</th>
            <th>RoomType</th>
            <th>Update</th>
            
            </tr>
        </thead>";

        $query="Select * from customerdata";
        if($myData = mysqli_query($conn,$query)){
    
            if(mysqli_num_rows($myData)==0){
                echo "No Record available";
            }
    
            else{
                $count1=1;
                while($record = mysqli_fetch_array($myData)){

                    echo"<tbody>";
                    echo"<tr data-expanded='true'>";
                    echo"<td>"; echo $record['CustomerID']; echo"</td>";
                    echo"<td>"; echo $record['Name']; echo"</td>";
                    echo"<td>"; echo $record['CNIC']; echo"</td>";
                    echo"<td>"; echo $record['PhoneNumber']; echo"</td>";
                    echo"<td>"; echo $record['Email']; echo"</td>";
                    echo"<td>"; echo $record['CheckIN']; echo"</td>";
                    echo"<td>"; echo $record['CheckOUT']; echo"</td>";
                    echo"<td>"; echo $record['RoomNumber']; echo"</td>";
                    echo"<td>"; echo $record['Roomtype']; echo"</td>";
                    echo"<td>"; echo"<form method='POST'>"; echo "<input type='submit' id='btnDelete12' name='cus$count1' value='Update'/>"; echo"</form>"; echo"</td>";
                    $count1++;
                    echo"</tr>";
                }
                echo"</tbody>
                </table>
                </div>
                </div>
                </div>
                </section>
                </section>";  
            }
        }
    }

    function gettransportdetails(){
        include('connection.php');
        //design();        
        echo "<thead>
            <tr>
            <th>DriverID</th>
            <th>DriverName</th>
            <th>Status</th>
            <th>Update</th>
            
            </tr>
        </thead>";

        $query="Select * from transport";
        if($myData = mysqli_query($conn,$query)){
    
            if(mysqli_num_rows($myData)==0){
                echo "No Record available";
            }
    
            else{
                $count=1;
                while($record = mysqli_fetch_array($myData)){

                    echo"<tbody>";
                    echo"<tr data-expanded='true'>";
                    echo"<td>"; echo $record['DriverID']; echo"</td>";
                    echo"<td>"; echo $record['DriverName']; echo"</td>";
                    echo"<td>"; echo $record['Status']; echo"</td>";
                    echo"<td>"; echo"<form method='POST'>"; echo "<input type='submit' id='btnDelete1' name='transport$count' value='Update'/>"; echo"</form>"; echo"</td>";
                    $count++;
                    echo"</tr>";
                }
                echo"</tbody>
                </table>
                </div>
                </div>
                </div>
                </section>
                </section>";  
            }
        }
    }

    function getbillingdetails(){
        include('connection.php');
        //design();        
        echo "<thead>
            <tr>
            <th>BillID</th>
            <th>CustomerID</th>
            <th>Name</th>
            <th>CNIC</th>
            <th>PhoneNumber</th>
            <th>Amount</th>
            <th>Status</th>
            <th>Update</th>
            </tr>
        </thead>";

        $query="Select * from billing";
        if($myData = mysqli_query($conn,$query)){
    
            if(mysqli_num_rows($myData)==0){
                echo "No Record available";
            }
    
            else{
                $count=1;
                while($record = mysqli_fetch_array($myData)){

                    echo"<tbody>";
                    echo"<tr data-expanded='true'>";
                    echo"<td>"; echo $record['BillID']; echo"</td>";
                    echo"<td>"; echo $record['CusID']; echo"</td>";
                    echo"<td>"; echo $record['Name']; echo"</td>";
                    echo"<td>"; echo $record['CNIC']; echo"</td>";
                    echo"<td>"; echo $record['Phone']; echo"</td>";
                    echo"<td>"; echo $record['Amount']; echo"</td>";
                    echo"<td>"; echo $record['Status']; echo"</td>";
                    echo"<td>"; echo"<form method='POST'>"; echo "<input type='submit' id='btnDelete1' name='bill$count' value='Update'/>"; echo"</form>"; echo"</td>";
                    $count++;
                    echo"</tr>";
                }
                echo"</tbody>
                </table>
                </div>
                </div>
                </div>
                </section>
                </section>";  
            }
        }
    }


    function getroomdetails(){
        include('connection.php');
        //design();    
        echo "<thead>
            <tr>
            <th>ROOMID</th>
            <th>RoomNumber</th>
            <th>Roomtype</th>
            <th>RoomStatus</th>
            <th>Update</th>
            </tr>
        </thead>";

        $query="Select * from rooms";
        if($myData = mysqli_query($conn,$query)){
    
            if(mysqli_num_rows($myData)==0){
                echo "No Record available";
            }
    
            else{
                $count=1;
                while($record = mysqli_fetch_array($myData)){

                    echo"<tbody>";
                    echo"<tr data-expanded='true'>";
                    echo"<td>"; echo $record['RoomID']; echo"</td>";
                    echo"<td>"; echo $record['RoomNumber']; echo"</td>";
                    echo"<td>"; echo $record['RoomType']; echo"</td>";
                    echo"<td>"; echo $record['Status']; echo"</td>";
                    echo"<td>"; echo"<form method='POST'>"; echo "<input type='submit' id='btnDelete1' name='$count' value='Update'/>"; echo"</form>"; echo"</td>";
                    $count++;
                    echo"</tr>";
                }
        
                echo"</tbody>
                </table>
                </div>
                </div>
                </div>
                </section>
                </section>";  
            }
        }
    }


    function getfooddetails(){
        include('connection.php');
        //design();    
        echo "<thead>
            <tr>
            <th>FOODID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Time</th>
            <th>Update</th>
            </tr>
        </thead>";

        $query="Select * from desifood";
        if($myData = mysqli_query($conn,$query)){
    
            if(mysqli_num_rows($myData)==0){
                echo "No Record available";
            }
    
            else{
                $count=1;
                while($record = mysqli_fetch_array($myData)){

                    echo"<tbody>";
                    echo"<tr data-expanded='true'>";
                    echo"<td>"; echo $record['id']; echo"</td>";
                    echo"<td>"; echo $record['name']; echo"</td>";
                    echo"<td>"; echo $record['description']; echo"</td>";
                    echo"<td>"; echo $record['price']; echo"</td>";
                    echo"<td>"; echo $record['quantity']; echo"</td>";
                    echo"<td>"; echo $record['time']; echo"</td>";
                    echo"<td>"; echo"<form method='POST'>"; echo "<input type='submit' id='btnDelete1' name='food$count' value='Update'/>"; echo"</form>"; echo"</td>";
                    $count++;
                    echo"</tr>";
                }
        
                echo"</tbody>
                </table>
                </div>
                </div>
                </div>
                </section>
                </section>";  
            }
        }
    }

    function getresbillingdetails(){
        include('connection.php');
        //design();    
        echo "<thead>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Amount</th>
            <th>Update</th>
            </tr>
        </thead>";

        $query="Select * from restaurantbill";
        if($myData = mysqli_query($conn,$query)){
    
            if(mysqli_num_rows($myData)==0){
                echo "No Record available";
            }
    
            else{
                $count=1;
                while($record = mysqli_fetch_array($myData)){

                    echo"<tbody>";
                    echo"<tr data-expanded='true'>";
                    echo"<td>"; echo $record['id']; echo"</td>";
                    echo"<td>"; echo $record['name']; echo"</td>";
                    echo"<td>"; echo $record['amount']; echo"</td>";
                    echo"<td>"; echo"<form method='POST'>"; echo "<input type='submit' id='btnDelete1' name='resbill$count' value='Update'/>"; echo"</form>"; echo"</td>";
                    $count++;
                    echo"</tr>";
                }
        
                echo"</tbody>
                </table>
                </div>
                </div>
                </div>
                </section>
                </section>";  
            }
        }
    }

    function getdeliverydetails(){
        include('connection.php');
        //design();    
        echo "<thead>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>CNIC</th>
            <th>Phone</th>
            <th>Delete</th>
            </tr>
        </thead>";

        $query="Select * from fooddelivery";
        if($myData = mysqli_query($conn,$query)){
    
            if(mysqli_num_rows($myData)==0){
                echo "No Record available";
            }
    
            else{
                $count=1;
                while($record = mysqli_fetch_array($myData)){

                    echo"<tbody>";
                    echo"<tr data-expanded='true'>";
                    $count1=$record['id'];
                    echo"<td>"; echo $record['id']; echo"</td>";
                    echo"<td>"; echo $record['name']; echo"</td>";
                    echo"<td>"; echo $record['email']; echo"</td>";
                    echo"<td>"; echo $record['phone']; echo"</td>";
                    echo"<td>"; echo"<form method='POST'>"; echo "<input type='submit' id='btnDelete1' name='del$count1' value='Delete'/>"; echo"</form>"; echo"</td>";
                    $count++;
                    echo"</tr>";
                }
        
                echo"</tbody>
                </table>
                </div>
                </div>
                </div>
                </section>
                </section>";  
            }
        }
    }

    function change($c){
         include('connection.php');

        //design();
        
        echo "<thead>
        <tr>
        <th>ROOMID</th>
        <th>RoomNumber</th>
        <th>Roomtype</th>
        <th>RoomStatus</th>
        <th>Update</th>
        </tr>
        </thead>";

        $query="Select * from rooms where RoomID=$c";
        if($myData = mysqli_query($conn,$query)){
    
            if(mysqli_num_rows($myData)==0){
                echo "No Record available";
            }
    
            else{
                $count=1;
                while($record = mysqli_fetch_array($myData)){
                    $stat1=$record['RoomID'];
                    $stat2=$record['RoomNumber'];
                    $stat3=$record['RoomType'];
                    $stat4=$record['Status'];

                    echo"<tbody>";
                    echo"<tr data-expanded='true'>";
                    echo"<form method='POST'>";
                    echo"<td>"; echo "<input type='text' id='btnDelete1' name='hi1' value='$stat1'/>"; echo"</td>";
                    echo"<td>"; echo "<input type='text' id='btnDelete1' name='hi2' value='$stat2'/>"; echo"</td>";
                    echo"<td>"; echo "<input type='text' id='btnDelete1' name='hi3' value='$stat3'/>";  echo"</td>";
                    echo"<td>"; echo "<input type='text' id='btnDelete1' name='hi4' value='$stat4'/>"; echo"</td>";
                    echo"<td>";  
                
                    echo "<input type='submit' id='btnDelete1' name='updatee' value='Update'/>";
                   // echo "<input type='submit' id='btnDelete1' name='roomdelete' value='Update'/>"; 
                    echo"</form>"; 
                    echo"</td>";
                    $count++;
                    echo"</tr>";
                }
                echo"</tbody>
                </table>
                </div>
                </div>
                </div>
                </section>
                </section>";  
            }
        }
            
    }

    function updateroomrecord(){
        include('connection.php');
        $roomid=$_POST['hi1'];
        $updatedroomnumber=$_POST["hi2"];
        $updatedroomtype=$_POST['hi3'];
        $updatedroomstatus=$_POST['hi4'];
        $query=" Update rooms SET RoomNumber='$updatedroomnumber',RoomType='$updatedroomtype',Status='$updatedroomstatus' WHERE RoomID='$roomid' ";

        if(mysqli_query($conn,$query)){
            echo "Updated";
        }
        else{
            header("Location:123.php");
        }
    }


    function change1($c){
         include('connection.php');

        //design();
        
        echo "<thead>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>CNIC</th>
        <th>PhoneNumber</th>
        <th>Email</th>
        <th>Check-IN</th>
        <th>Check-Out</th>
        <th>Update</th>
        </tr>
        </thead>";

        $query="Select * from customerdata where CustomerID=$c";
        if($myData = mysqli_query($conn,$query)){
    
            if(mysqli_num_rows($myData)==0){
                echo "No Record available";
            }
    
            else{
                $count=1;
                while($record = mysqli_fetch_array($myData)){
                    $stat11=$record['CustomerID'];
                    $stat22=$record['Name'];
                    $stat33=$record['CNIC'];
                    $stat44=$record['PhoneNumber'];
                    $stat55=$record['Email'];
                    $stat66=$record['CheckIN'];
                    $stat77=$record['CheckOUT'];

                    echo"<tbody>";
                    echo"<tr data-expanded='true'>";
                    echo"<form method='POST'>";
                    echo"<td>"; echo "<input type='text' id='btnDelete1' name='hi11' value='$stat11'/>"; echo"</td>";
                    echo"<td>"; echo "<input type='text' id='btnDelete1' name='hi22' value='$stat22'/>"; echo"</td>";
                    echo"<td>"; echo "<input type='text' id='btnDelete1' name='hi33' value='$stat33'/>";  echo"</td>";
                    echo"<td>"; echo "<input type='text' id='btnDelete1' name='hi44' value='$stat44'/>"; echo"</td>";
                    echo"<td>"; echo "<input type='text' id='btnDelete1' name='hi55' value='$stat55'/>"; echo"</td>";
                    echo"<td>"; echo "<input type='text' id='btnDelete1' name='hi66' value='$stat66'/>"; echo"</td>";
                    echo"<td>"; echo "<input type='text' id='btnDelete1' name='hi77' value='$stat77'/>"; echo"</td>";
                    echo"<td>";  
                
                    echo "<input type='submit' id='btnDelete1' name='updatee1' value='Update'/>";
                   // echo "<input type='submit' id='btnDelete1' name='cusdelete' value='Delete'/>";  
                    echo"</form>"; 
                    echo"</td>";
                    $count++;
                    echo"</tr>";
                }
        
                echo"</tbody>
                </table>
                </div>
                </div>
                </div>
                </section>
                </section>";        
            }
        }
            
    }

    function updatecustomerrecord(){
        include('connection.php');
        $cusid=$_POST['hi11'];
        $updatedcusname=$_POST["hi22"];
        $updatedcuscnic=$_POST['hi33'];
        $updatedcusnum=$_POST['hi44'];
        $updatedcusemail=$_POST['hi55'];
        $updatedcusin=$_POST['hi66'];
        $updatedcusout=$_POST['hi77'];
        $query1=" Update customerdata SET Name='$updatedcusname',CNIC='$updatedcuscnic',PhoneNumber='$updatedcusnum',Email='$updatedcusemail',CheckIN='$updatedcusin',CheckOUT='$updatedcusout' WHERE CustomerID='$cusid' ";
        $query2="Update billing SET Name='$updatedcusname',Phone='$updatedcusnum',CNIC='$updatedcuscnic' WHERE CusID='$cusid' ";
        if(mysqli_query($conn,$query1)){
            echo "Updated";
        }
        else{
            header("Location:123.php");
        }   

        if(mysqli_query($conn,$query2)){
            echo "Updated";
        }
        else{
            header("Location:123.php");
        }  

    }


    function change2($c){
         include('connection.php');

        //design();
        
        echo "<thead>
        <tr>
        <th>BillID</th>
        <th>CustomerID</th>
        <th>CustomerName</th>
        <th>Amount</th>
        <th>Status</th>
        <th>Update</th>
        </tr>
        </thead>";

        $query="Select * from billing where CusID=$c";
        if($myData = mysqli_query($conn,$query)){
    
            if(mysqli_num_rows($myData)==0){
                echo "No Record available";
            }
    
            else{
                $count=1;
                while($record = mysqli_fetch_array($myData)){
                    $stat111=$record['BillID'];
                    $stat222=$record['CusID'];
                    $stat2221=$record['Name'];
                    $stat333=$record['Amount'];
                    $stat444=$record['Status'];

                    echo"<tbody>";
                    echo"<tr data-expanded='true'>";
                    echo"<form method='POST'>";
                    echo"<td>"; echo "<input type='text' id='btnDelete1' name='hi111' value='$stat111'/>"; echo"</td>";
                    echo"<td>"; echo "<input type='text' id='btnDelete1' name='hi222' value='$stat222'/>"; echo"</td>";
                    echo"<td>"; echo "<input type='text' id='btnDelete1' name='hi333' value='$stat2221'/>"; echo"</td>";
                    echo"<td>"; echo "<input type='text' id='btnDelete1' name='hi444' value='$stat333'/>";  echo"</td>";
                    echo"<td>"; echo "<input type='text' id='btnDelete1' name='hi555' value='$stat444'/>"; echo"</td>";
                    echo"<td>";  
                
                    echo "<input type='submit' id='btnDelete1' name='updatee12' value='Update'/>"; 
                    //echo "<input type='submit' id='btnDelete1' name='billingdel' value='Delete'/>"; 
                    echo"</form>"; 
                    echo"</td>";
                    $count++;
                    echo"</tr>";
                }
        
                echo"</tbody>
                </table>
                </div>
                </div>
                </div>
                </section>
                </section>";        
            }
        }
            
    }


    function updatebillingrecord(){
        include('connection.php');
        $billidd=$_POST['hi111'];
        $cusidd=$_POST["hi222"];
        $updatedname=$_POST['hi333'];
        $updatedamount=$_POST['hi444'];
        $updatedstatus=$_POST['hi555'];
        $query=" Update billing SET Amount='$updatedamount',Status='$updatedstatus' WHERE BillID='$billidd' ";

        if(mysqli_query($conn,$query)){
            echo "Updated";
        }
        else{
            header("Location:123.php");
        }
    }

   function change3($c){
         include('connection.php');

        //design();
        
        echo "<thead>
        <tr>
        <th>DriverID</th>
        <th>DriverName</th>
        <th>Status</th>
        <th>Update</th>
        </tr>
        </thead>";

        $query="Select * from transport where DriverID=$c";
        if($myData = mysqli_query($conn,$query)){
    
            if(mysqli_num_rows($myData)==0){
                echo "No Record available";
            }
    
            else{
                $count=1;
                while($record = mysqli_fetch_array($myData)){
                    $stat1=$record['DriverID'];
                    $stat2=$record['DriverName'];
                    $stat3=$record['Status'];

                    echo"<tbody>";
                    echo"<tr data-expanded='true'>";
                    echo"<form method='POST'>";
                    echo"<td>"; echo "<input type='text' id='btnDelete1' name='2hi1' value='$stat1'/>"; echo"</td>";
                    echo"<td>"; echo "<input type='text' id='btnDelete1' name='2hi2' value='$stat2'/>"; echo"</td>";
                    echo"<td>"; echo "<input type='text' id='btnDelete1' name='2hi3' value='$stat3'/>"; echo"</td>";
                    echo"<td>";  
                
                    echo "<input type='submit' id='btnDelete1' name='driverupdatee' value='Update'/>"; 
                    //echo "<input type='submit' id='btnDelete1' name='driverdel' value='Delete'/>";
                    echo"</form>"; 
                    echo"</td>";
                    $count++;
                    echo"</tr>";
                }
                echo"</tbody>
                </table>
                </div>
                </div>
                </div>
                </section>
                </section>";  
            }
        }
            
    }

    function updatetransportrecord(){
        include('connection.php');
        $driveridd=$_POST['2hi1'];
        $drivernamee=$_POST["2hi2"];
        $updatedstatuss=$_POST['2hi3'];
        $query=" Update transport SET DriverName='$drivernamee',Status='$updatedstatuss' WHERE DriverID='$driveridd' ";

        if(mysqli_query($conn,$query)){
            echo "Updated";
        }
        else{
            header("Location:123.php");
        }
    }


    function change4($c){
         include('connection.php');

        //design();
        
        echo "<thead>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Time</th>
        <th>Update</th>
        </tr>
        </thead>";

        $query="Select * from desifood where id=$c";
        if($myData = mysqli_query($conn,$query)){
    
            if(mysqli_num_rows($myData)==0){
                echo "No Record available";
            }
    
            else{
                $count=1;
                while($record = mysqli_fetch_array($myData)){
                    $statt111=$record['id'];
                    $statt222=$record['name'];
                    $statt2221=$record['description'];
                    $statt333=$record['price'];
                    $statt444=$record['quantity'];
                    $statt555=$record['time'];

                    echo"<tbody>";
                    echo"<tr data-expanded='true'>";
                    echo"<form method='POST'>";
                    echo"<td>"; echo "<input type='text' id='btnDelete1' name='one' value='$statt111'/>"; echo"</td>";
                    echo"<td>"; echo "<input type='text' id='btnDelete1' name='two' value='$statt222'/>"; echo"</td>";
                    echo"<td>"; echo "<input type='text' id='btnDelete1' name='three' value='$statt2221'/>"; echo"</td>";
                    echo"<td>"; echo "<input type='text' id='btnDelete1' name='four' value='$statt333'/>";  echo"</td>";
                    echo"<td>"; echo "<input type='text' id='btnDelete1' name='five' value='$statt444'/>"; echo"</td>";
                    echo"<td>"; echo "<input type='text' id='btnDelete1' name='six' value='$statt555'/>"; echo"</td>";
                    echo"<td>";  
                
                    echo "<input type='submit' id='btnDelete1' name='uppdatee12' value='Update'/>"; 
                    //echo "<input type='submit' id='btnDelete1' name='billingdel' value='Delete'/>"; 
                    echo"</form>"; 
                    echo"</td>";
                    $count++;
                    echo"</tr>";
                }
        
                echo"</tbody>
                </table>
                </div>
                </div>
                </div>
                </section>
                </section>";        
            }
        }
            
       } 
        function updatefoodrecord(){
        include('connection.php');
        $fid=$_POST['one'];
        $updatedname=$_POST['two'];
        $updateddescription=$_POST['three'];
        $updatedprice=$_POST['four'];
        $updatedquantity=$_POST['five'];
        $updatedtime=$_POST['six'];

        $query=" Update desifood SET name='$updatedname',description='$updateddescription',price='$updatedprice',quantity='$updatedquantity',time='$updatedtime' WHERE id='$fid' ";

        if(mysqli_query($conn,$query)){
            echo "Updated";
        }
        else{
            header("Location:123.php");
        }
    }


    function change5($c){
         include('connection.php');

        //design();
        
        echo "<thead>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Amount</th>
        <th>Update</th>
        </tr>
        </thead>";

        $query="Select * from restaurantbill where id=$c";
        if($myData = mysqli_query($conn,$query)){
    
            if(mysqli_num_rows($myData)==0){
                echo "No Record available";
            }
    
            else{
                $count=1;
                while($record = mysqli_fetch_array($myData)){
                    $sstat1=$record['id'];
                    $sstat2=$record['name'];
                    $sstat3=$record['amount'];

                    echo"<tbody>";
                    echo"<tr data-expanded='true'>";
                    echo"<form method='POST'>";
                    echo"<td>"; echo "<input type='text' id='btnDelete1' name='hhi1' value='$sstat1'/>"; echo"</td>";
                    echo"<td>"; echo "<input type='text' id='btnDelete1' name='hhi2' value='$sstat2'/>"; echo"</td>";
                    echo"<td>"; echo "<input type='text' id='btnDelete1' name='hhi3' value='$sstat3'/>";  echo"</td>";
                    echo"<td>";  
                
                    echo "<input type='submit' id='btnDelete1' name='resbillupdatee' value='Update'/>";
                   // echo "<input type='submit' id='btnDelete1' name='roomdelete' value='Update'/>"; 
                    echo"</form>"; 
                    echo"</td>";
                    $count++;
                    echo"</tr>";
                }
                echo"</tbody>
                </table>
                </div>
                </div>
                </div>
                </section>
                </section>";  
            }
        }
            
    }

    function updateresbillrecord(){
        include('connection.php');
        $bid=$_POST['hhi1'];
        $updatedname=$_POST['hhi2'];
        $updatedamount=$_POST['hhi3'];

        $query=" Update restaurantbill SET name='$updatedname',amount='$updatedamount' WHERE id='$bid' ";

        if(mysqli_query($conn,$query)){
            echo "Updated";
        }
        else{
            header("Location:123.php");
        }
    }

   
   function alters($c){
         include('connection.php');

        //design();
        
        echo "<thead>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>CNIC</th>
        <th>DELETE</th>
        </tr>
        </thead>";

        $query="Select * from fooddelivery where id=$c";
        if($myData = mysqli_query($conn,$query)){
    
            if(mysqli_num_rows($myData)==0){
                echo "No Record available";
            }
    
            else{
                $count=1;
                while($record = mysqli_fetch_array($myData)){
                    $sts1=$record['id'];
                    $sts2=$record['name'];
                    $sts3=$record['email'];

                    echo"<tbody>";
                    echo"<tr data-expanded='true'>";
                    echo"<form method='POST'>";
                    echo"<td>"; echo "<input type='text' id='btnDelete1' name='onee' value='$sts1'/>"; echo"</td>";
                    echo"<td>"; echo "<input type='text' id='btnDelete1' name='twoo' value='$sts2'/>"; echo"</td>";
                    echo"<td>"; echo "<input type='text' id='btnDelete1' name='threee' value='$sts3'/>"; echo"</td>";
                    echo"<td>";  
                
                    echo "<input type='submit' id='btnDelete1' name='del' value='Delete'/>"; 
                    //echo "<input type='submit' id='btnDelete1' name='billingdel' value='Delete'/>"; 
                    echo"</form>"; 
                    echo"</td>";
                    $count++;
                    echo"</tr>";
                }
        
                echo"</tbody>
                </table>
                </div>
                </div>
                </div>
                </section>
                </section>";        
            }
        }
            
       } 

    function deletedel(){
        include('connection.php');
        $deleteid=$_POST['onee'];

        $query=" Delete from fooddelivery WHERE id='$deleteid' ";

        if(mysqli_query($conn,$query)){
            echo "Deleted";
        }
        else{
            header("Location:123.php");
        }
    }

    // function deleteroomrecord($c){
    //     include('connection.php');
    //     $query="Delete from rooms where RoomID=$c";
    //     if(mysqli_query($conn,$query)){
    //         //header("Location:hotrest.html");
    //     }
    //     else{
    //         header("Location:123.php");
    //     }

    // }
    
    // function deletecustomerrecord($c){
    //     include('connection.php');
    //     $query="Delete from customerdata where CustomerID=$c";
    //     if(mysqli_query($conn,$query)){
    //         //header("Location:hotrest.html");
    //     }
    //     else{
    //         header("Location:123.php");
    //     }

    // }

    // function deletebillrecord($c){
    //     include('connection.php');
    //     $query="Delete from billing where BillID=$c";
    //     if(mysqli_query($conn,$query)){
    //         //header("Location:hotrest.html");
    //     }
    //     else{
    //         header("Location:123.php");
    //     }

    // }

    // function deletetransportrecord($c){
    //     include('connection.php');
    //     $query="Delete from transport where DriverID=$c";
    //     if(mysqli_query($conn,$query)){
    //         //header("Location:hotrest.html");
    //     }
    //     else{
    //         header("Location:123.php");
    //     }

    // }


}

$man=new Manager();

$man->startup();

if(isset($_POST['table1']))
{
    $man->design();
    $man->getcustomerdetails();
}


else if(isset($_POST['table2']))
{
    $man->design();
    $man->getbillingdetails();
}

else if(isset($_POST['table3']))
{
    $man->design();
    $man->getroomdetails();
}

else if(isset($_POST['table4']))
{
    $man->design();
    $man->gettransportdetails();
}

else if(isset($_POST['table5']))
{
    $man->design();
    $man->getfooddetails();
}

else if(isset($_POST['table6']))
{
    $man->design();
    $man->getresbillingdetails();
}

else if(isset($_POST['table7']))
{
    $man->design();
    $man->getdeliverydetails();
}


$a=1;
while($a<=15){
    if(isset($_POST["del$a"])){
        $man->design();
        $man->alters($a);       
    }
    $a++;
}

if(isset($_POST['del'])){
    $man->deletedel();
    $man->design();
    $man->getdeliverydetails();
}

$c=1;
while($c<=15){
    if(isset($_POST["$c"])){
        $man->design();
        $man->change($c);        
    }
    $c++;
}



if(isset($_POST['updatee'])){
    $man->updateroomrecord();
    $man->design();
    $man->getroomdetails();
}


$c1=1;
while($c1<=10){
    if(isset($_POST["cus$c1"])){
        $man->design();
        $man->change1($c1);         
    }
    $c1++;
}

if(isset($_POST['updatee1'])){
    $man->updatecustomerrecord();
    $man->design();
    $man->getcustomerdetails();
}

$c2=1;
while($c2<=10){
    if(isset($_POST["bill$c2"])){
        $man->design();
        $man->change2($c2);         
    }
    $c2++;
}

//update

if(isset($_POST['updatee12'])){
    $man->updatebillingrecord();
    $man->design();
    $man->getbillingdetails();
}


$c3=1;
while($c3<=10){
    if(isset($_POST["transport$c3"])){
        $man->design();
        $man->change3($c3);         
    }
    $c3++;
}

if(isset($_POST['driverupdatee'])){
    $man->updatetransportrecord();
    $man->design();
    $man->gettransportdetails();
}


$c4=1;
while($c4<=10){
    if(isset($_POST["food$c4"])){
        $man->design();
        $man->change4($c4);         
    }
    $c4++;
}

if(isset($_POST['uppdatee12'])){
    $man->updatefoodrecord();
    $man->design();
    $man->getfooddetails();
}


$c5=1;
while($c5<=10){
    if(isset($_POST["resbill$c5"])){
        $man->design();
        $man->change5($c5);         
    }
    $c5++;
}

if(isset($_POST['resbillupdatee'])){
    $man->updateresbillrecord();
    $man->design();
    $man->getresbillingdetails();
}

// //deletion
// //deleteroom
// $d1=1;
// while($d1<=15){
//     if(isset($_POST["$d1"])){
//         $man->deleteroomrecord($d1);
                
//     }
//     $d1++;
// }

// //deletecustomer
// $d2=1;
// while($d2<=15){
//     if(isset($_POST["cus$d2"])){
//         $man->deletecustomerrecord($d2);
//     }
//     $d2++;
// }

// //deletebill
// $d3=1;
// while($d3<=15){
//     if(isset($_POST["bill$d3"])){
//         $man->deletebillrecord($d3);
                
//     }
//     $d3++;
// }

// //deletetransport
// $d4=1;
// while($d4<=15){
//     if(isset($_POST["transport$d4"])){
//         $man->deletetransportrecord($d4);
                
//     }
//     $d4++;
// }

?>
