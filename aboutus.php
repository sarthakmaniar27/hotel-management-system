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
#sam
{
	background-color:red;
	width:40%;
	height:14px;
	margin-left:370px;
	padding:16px;
	border:4px solid white;
	border-radius:40px;
	color:white;
	text-align:center;
	font-family:Arial, Helvetica, sans-serif; 
	font-weight:bold;

}

#ram
{ 
  margin-top:120px;
  color:white;
}

table
{
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

 td,th 
{
  border: 1px solid black;
  border-radius:30px;
  padding: 8px;
  text-align: center;
}
tr:nth-child(even){background-color:#0000cc;}
tr:nth-child(odd){background-color:#000066;}
tr:hover {background-color:cyan;color:black;}
th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align:center;
  background-color:red;
  color: white;
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

<br><br><br>


<div id="sam">
<?php
include('dbconn.php');
$sql="SELECT count(*) as total from customer";
$result=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($result);
echo "WE HAVE BEEN VISITED BY MORE THAN ".$data['total']." FAMILIES.";
$conn->close();
?>
</div>
<br>
<div id="sam">
<?php
include('dbconn.php');
$sql="SELECT avg(contactus.review) as total from customer inner join contactus on customer.customer_id=contactus.custome_id";
$result=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($result);
echo "WE HAVE BEEN REVIEWED: ".$data['total']." BY OUR BELOVED GUESTS.";

$conn->close();
?>
</div>



<div id="ram">
<h2 style="font-size:30px;font-family:Arial, Helvetica, sans-serif ;color:white;text-align:center;background-color:darkblue;border:2px solid black;border-radius:20px;">OUR TOLL-FREE HELPLINE  NUMBERS</h2>
<?php
$link = mysqli_connect("localhost", "root", "", "Hotel_Management_System");
if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "SELECT * FROM aboutus";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>SR.NO.</th>";
                echo "<th>BRANCH OFFICE</th>";
                echo "<th>MOBILE NO.</th>";
                
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['aboutus_id'] . "</td>";
                echo "<td>" . $row['city_branch_office'] . "</td>";
                echo "<td>" . $row['office_phoneno'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
?>
</div>



</body>
</html>