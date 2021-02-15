<!DOCTYPE html>
<html>
<head>
	<title>FACILTIES(HOTEL MANAGEMENT)</title>
</head>
<style>
body
{
  background-color: black;
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
  padding: 12px 90px;
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
h2
{   
	font-family:Arial, Helvetica, sans-serif;
	color:cyan;
	text-align: center;
	font-weight:bold;
	font-size:30px;

}
h3
{
	font-family:Arial, Helvetica, sans-serif;
	font-size:17px;
	font-weight:normal;
}
</style>
<body>
<h1>FACILITIES</h1>
<ul>
	<li><a href="index1.php">HOME</a></li>
<li><a href="customer_signup.php">BOOKING</a></li>
<li><a href="manager_login.php">MANAGEMENT</a></li>
<li><a href="aboutus.php">ABOUT US</a></li>
<li><a href="contactus.php">CONTACT US</a></li>
</ul>


<h2>FACILITIES</h2>
<!--PHP CODE-->

<?php
include('dbconn.php');
$sql = "SELECT `facility_id`, `facility_name` FROM `facility`";
$run = mysqli_query($conn,$sql);
while ($data = mysqli_fetch_assoc($run)) 
	{
		?>
		<h3 style="color:#00ff00;"><?php echo $data['facility_id'],".) ",$data['facility_name'];?></h3>
		<?php
	}

?>
<h2>GUEST SERVICES</h2>
	<h3 style="color:#00ff00;">1. 24-HOUR ROOM SERVICE</h3>
	<h3 style="color:#00ff00;">2. FREE WIRELESS INTERNET ACCESS </h3>
	<h3 style="color:#00ff00;">3. COMPLIMENTARY USE OF HOTEL BICYCLE</h3>
	<h3 style="color:#00ff00;">4. LAUNDARY SERVICE</h3>
	<h3 style="color:#00ff00;">5. TOURS AND EXCURIONS</h3>
	<h3 style="color:#00ff00;">6. 24 HOUR CONCIERGE</h3>
	<h3 style="color:#00ff00;">7. MEETING FACILITIES</h3>
	<h3 style="color:#00ff00;">8. E-BIKE & HORSE CART RENTAL</h3>
	<h3 style="color:#00ff00;">9. BABYSITTING ON REQUEST</h3>
	<h3 style="color:#00ff00;">10. 24-HOUR DOCTOR ON CALL</h3>


</body>
</html>