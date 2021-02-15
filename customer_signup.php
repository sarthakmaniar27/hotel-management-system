<?php
	session_start();
?>

<?php

include('dbconn.php');
$sql = "SELECT `room_id`, `room_no`, `room_status` FROM `rooms`";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
//$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
$room = array();
while($row = $result->fetch_assoc()) 
{
	if($row["room_status"] == 1)
	{
		array_push($room, $row["room_id"]);
	}
}
//echo "</table>";
// print_r($room);
} else { echo "0 results"; }
mysqli_close($conn);
?>

<html>
<head>
	<title>BOOKING AND REGISTRATION</title>
	<style>
		@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300);
        .sub
        {
        	text-transform:Uppercase;
        }
		.sub:hover
		{
			background:green;
			border:2px solid yellow ;
		}
		
		
		form
		{
				text-align:center;
				margin: auto;
				border: 4px solid white;
				width:70%;
				background-color:black;
				opacity: 0.5;
				padding:25px;
		}
		::placeholder
		{
			color: white;
		}
		input,textarea
		{
			text-align:center;
			outline: 0;
			border:2px solid white;
			padding: 10px;
			border-radius: 20px;
			background: none;
			
			color: white;
		}
		body
		{
			background-size:cover;
			background-position: center;
			background-repeat: no-repeat;
    		background: linear-gradient(to bottom right,blue 0%,cyan 100%);

		}
		h2
		{
			text-shadow: 5px 2px 4px black;
			font-size:30px;
			color:white;
			text-align:center;
			font-weight:normal;
			font-family:Arial, Helvetica, sans-serif;
		}

		div
		{
			font-family:Arial, Helvetica, sans-serif;
			font-weight:bold;
			color:#00ff00;
			text-align:center; 
			padding:20px
		}
		 .bg-bubbles
		{
		    position: absolute;
		    top: 0;
		    left: 0;
		    width: 100%;
		    height: 100%;
		    z-index: 1;
		}
		 .bg-bubbles li 
		{
		    position: absolute;
		    list-style: none;
		    display: block;
		    width: 40px;
		    height: 40px;
		    background-color: rgba(255,255,255,0.15);
		    bottom: -160px;
		    -webkit-animation: square 25s infinite;
		    animation: square 25s infinite;
		    -webkit-transition-timing-function: linear;
		    transition-timing-function: linear;
		}
		 .bg-bubbles li:nth-child(1)
	    {
		
		    left: 10%;
	    }
		 .bg-bubbles li:nth-child(2) 
		{
		    left: 20%;
		    width: 80px;
		    height: 80px;
		    animation-delay: 2s;
		    animation-duration: 17s;
		}
		 .bg-bubbles li:nth-child(3) 
		{
		    left: 25%;
		    animation-delay: 4s;
		}
		 .bg-bubbles li:nth-child(4)
	   {
		    left: 40%;
		    width: 60px;
		    height: 60px;
		    animation-duration: 22s;
		    background-color: rgba(255,255,255,0.25);
		}
		 .bg-bubbles li:nth-child(5) 
	    {
		    left: 70%;
		}
		 .bg-bubbles li:nth-child(6)
	   {
		    left: 80%;
		    width: 120px;
		    height: 120px;
		    animation-delay: 3s;
		    background-color: rgba(255,255,255,0.2);
		}
		 .bg-bubbles li:nth-child(7) 
		{
		    left: 32%;
		    width: 160px;
		    height: 160px;
		    animation-delay: 7s;
		}
		 .bg-bubbles li:nth-child(8) 
		{
		    left: 55%;
		    width: 20px;
		    height: 20px;
		    animation-delay: 15s;
		    animation-duration: 40s;
		}
		 .bg-bubbles li:nth-child(9) 
		{
		    left: 25%;
		    width: 10px;
		    height: 10px;
		    animation-delay: 2s;
		    animation-duration: 40s;
		    background-color: rgba(255,255,255,0.3);
		}
		 .bg-bubbles li:nth-child(10) 
		{
		    left: 90%;
		    width: 160px;
		    height: 160px;
		    animation-delay: 11s;
		}
		 @-webkit-keyframes square 
		 {
		    0% 
		   {
		       transform: translateY(0);
		   }
		    100% 
		   {
		       transform: translateY(-700px) rotate(600deg);
		   }
		}
		 @keyframes square 
		 {
		    0% 
		   {
		       transform: translateY(0);
		   }
		    100% 
		   {
		       transform: translateY(-700px) rotate(600deg);
		   }
		}
	</style>
</head>

<body>
	<h2 align="left"><b>REGISTRATION AND BOOKING</b></h2>
	<center>
		<form action="" method="post">
			<div>CUSTOMER NAME:
				<input type="text" name="Customername" placeholder="ENTER YOUR NAME" pattern="^[A-Za-z]*$"  required=""></input>
			</div>
			<div>MOBILE NUMBER:
				<input type="text" placeholder="ENTER MOBILE NO." name="Mobilenum" pattern="^[0-9]{10}$"></input>
			</div>
			<div><center>ADDRESS:</center>
			<textarea type="text" name="Address" placeholder="ENTER YOUR ADDRESS" style="height:50px; width:40%;"></textarea>
			</div>

			<div>ACQUAINTANCE:
				<input type="text" name="Acquaintance" placeholder="YOUR ACQUAINTANCE"  pattern="^[0-9]|10$" required=""></input>
			</div>
			<div>ROOM TYPE:
				<select>
					<option>CHOOSE ONE</option>
					<option>SUITE ROOM</option>
					<option>DELUX ROOM</option>
				</select>
			</div>

			<div>ROOM AVAILABLE:
				<select>
					<option>CHOOSE ONE</option>
					<?php
				        
				        foreach($room as $r){
				        ?>
				        <option value="<?php echo strtolower($r); ?>"><?php echo $r; ?></option>
				        <?php
				        }
        			?>
				</select>
			</div>

			<div>BOOKING NAME:
				<input type="text" name="Bookingname" placeholder="ENTER BOOKING NAME" pattern="^[A-Za-z]*$"  required=""></input>
			</div>
			<div>BOOKING METHOD:
				<input type="text" name="Bookingmethod" placeholder="BOOKING METHOD" style="width:21.2%;" pattern="^[A-Za-z]*$"  required=""></input>
			</div>
			<div>CHECK-IN DATE:
				<input type="date" name="Checkin_date" placeholder="ENTER CHECK IN DATE" pattern="^[A-Z0-9 _]*$"  required=""></input>
			</div>
			<div>CHECK-OUT DATE:
				<input type="date" name="Checkout_date" placeholder="ENTER CHECK OUT DATE" pattern="^[A-Z0-9 _]*$"  required=""></input>
			</div>
			<div>PAYMENT DATE:
				<input type="date" name="Payment_date" placeholder="ENTER THE  DATE OF  PAYMENT" required=""></input>
			</div>
			<div>PAYMENT AMOUNT:
				<input type="number" name="Payment_amount" placeholder="ENTER PAYMENT AMOUNT"  pattern="^[0-9]|10$" required=""></input>
			</div>
			<div>	
				<input  class="sub" type="submit" placeholder="SUBMIT" name="SUBMIT"></input>	
				<input  class="sub"	type="reset" placeholder="RESET" name="RESET"></input>
				<a href="register.php"><input  class="sub"	placeholder="REGISTER" ></input></a>
			</div>
		</form>
		<ul class="bg-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</center>
</body>
</html>

<?php

if(isset($_POST['SUBMIT']))
{
	include('dbconn.php');


	$cid = rand(1030,9999);
	$Mobilenum=$_POST["Mobilenum"];
	$Customername=$_POST["Customername"];
	$Address=$_POST["Address"];
	$Acquaintance=$_POST["Acquaintance"];
	$Payment_date=$_POST["Payment_date"];
	$Payment_amount=$_POST["Payment_amount"];
	$Payment_id=rand(1000,9999);

	$bid = rand(0,1000);
	$Bookingname=$_POST["Bookingname"];
    $Bookingmethod=$_POST["Bookingmethod"];
    //$Checkin_time=$_POST["Checkin_time"];
    //$Checkout_time=$_POST["Checkout_time"];
    $Checkin_date=$_POST["Checkin_date"];
    $Checkout_date=$_POST["Checkout_date"];
    
	
      
	$query1="INSERT into customer (customer_id,customer_name,customer_number,customer_address,acquaintance,payment_date,payment_amount,payment_id) values('$cid','$Customername','$Mobilenum','$Address','$Acquaintance','$Payment_date','$Payment_amount','$Payment_id')";
	$run1 = mysqli_query($conn,$query1);
	if($run1 == true)
	{
		//echo "<br><br><h2 style='color:lightgrey;'>All Values Inserted. Successfully</h2>";
		?>
		 <script>
			alert('Data Inserted Successfully!');
		 </script>

		<?php
	}
	else
	{
		echo("Error: ".mysqli_error($conn));
	}
	$query2="INSERT INTO `booking`(`booking_id`, `booking_name`, `booking_method`, `checkin_date`, `checkout_date`, `customer_id`) VALUES ('$bid','$Bookingname','$Bookingmethod','$Checkin_date','$Checkout_date','$cid')";
	$run2 = mysqli_query($conn,$query2);
	if($run2 == true)
	{
		//echo "<br><br><h2 style='color:lightgrey;'>All Values Inserted. Successfully</h2>";
		?>
		 <script>
			alert('All Values Inserted Successfully!');
		 </script>

		<?php
	}
	else
	{
		echo("Error: ".mysqli_error($conn));
	}
}
session_destroy();
?>