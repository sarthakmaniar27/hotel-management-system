<!DOCTYPE html>
<html>
<head>
	<title>ABOUT US(HOTEL MANAGEMENT)</title>
</head>
<style>
body
{
  background-color:black;
}
h1
{
  color:white;
  font-family:Arial, Helvetica, sans-serif;
  font-size:40px;
  background-color:#ffcc00;
  font-weight:bold;
  text-align: center;
  border:3px solid blue;
  border-radius:30px;

}
h1:hover
{   
	color:black;
	background-color:white;
	border:3px solid #ffcc00;
}
ul 
{
  list-style-type: none;
  padding: 0;
  overflow: hidden;
  background-color:black;
}

li 
{
  float:left;
}

li a 
{
  display: block;
  color: white;
  font-family:Arial, Helvetica, sans-serif;
  text-align: center;
  padding: 12px 88px;
  text-decoration: none;
  border: solid 2px #ffcc00;
  border-radius:20px;
  background-color:blue;
}

li a:hover 
{ 
  color:blue;
  font-weight:bold;
  background-color:#ffcc00;
  border: solid 2px blue;
}


</style>

<body>

<h1>ABOUT US</h1>
<ul>
<li><a href="index1.php">HOME</a></li>
<li><a href="customer_signup.php">BOOKING</a></li>
<li><a href="manager_login.php">MANAGEMENT</a></li>
<li><a href="facilities.php">FACILITIES</a></li>
<li><a href="contactus.php">CONTACT US</a></li>
</ul>

<?php



if($_SERVER["REQUEST_METHOD"]=="POST")
{

  include('dbconn.php');	
	$Mobilenum=$_POST["Mobilenum"];
	$Customername=$_POST["Customername"];
	$Address=$_POST["Address"];
	$Customerid=$_POST["Customerid"];
	$Review=$_POST["Review"];
	
	//$query="INSERT into contactus (custome_id,customer_name,customer_number,customer_address,review) values('$Customerid','$Customername','$Mobilenum','$Address','$Review')";
  $query = "INSERT INTO `contactus`(`custome_id`, `customer_name`, `customer_number`, `customer_address`, `review`) VALUES ('$Customerid','$Customername','$Mobilenum','$Address','$Review')";
	if(mysqli_query($conn,$query))
	{
		echo "<br><br><h2 style='color:white;text-align:center;font-family:Arial, Helvetica, sans-serif;'>THANKYOU. YOU HAVE REVIEWED SUCCESSFULLY.</h2>";
	}
	else
	{
		echo "fail to insert";
	}
}
mysqli_close($conn);
?>
</body>
</html>
