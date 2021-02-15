<?php
	session_start();
	include "savetable.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<link rel="stylesheet" href="manager_login_style.css">
<style>
body{
  background: linear-gradient(to bottom right,#50a3a2 0%,#53e3a6 100%);
  background-attachment: fixed;
}
form{
				text-align:center;
				margin: auto;
				border: 2px solid white;
				width: 12%;
				background-color: black;
				opacity: 0.5;
				padding:2px;
		}
input {
  border: none;
  display: inline;
  font-family: inherit;
  font-size: inherit;
  padding: none;
  width: auto;
}
table {
border-collapse: collapse;
width: auto;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) input[type=text]{background-color: #f2f2f2; color : black;}
tr:nth-child(even) input[type=submit]{background-color: #f2f2f2; color : black;}
#subbuttn{
  margin : auto;
  margin-left: auto;
  margin-right: auto;
  background-color: #588c7e; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
  font-family: monospace;
  font-size: 25px;
  font-weight : bold;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}
#logout{
  background-color: #588c7e; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  background-color: white; 
  color: black; 
  border: 2px solid #588c7e;
  font-family: monospace;
  font-size: 25px;
}
#logout:hover{
  background-color: #588c7e;
  color: white;
}
</style>
<script src="empinfo_script.js"></script>
</head>
<body>
<table>
<tr>
<th>Employee ID</th>
<th>Employee Name</th>
<th>Employee Salary</th>
<th>Working Hours</th>
<th>Experience</th>
<th>Edit</th>
</tr>
<?php
 include('dbconn.php');
//echo $_SESSION['name'];
$sql = "select employee_id, employee_name, employee_salary,working_hours,experience from employee where manager_id = '".$_SESSION['id']."'";
//YAHA IF MANAGER LOGIN HUA NA TOH SQL ME YE ADD KARNA.MATLAB MANAGER ID LE LENA FROM LOGIN AND YE SQL ME USE KARNA
//	WHERE manager_id = POST["manager_id"]


$result = $conn->query($sql);
if ($result->num_rows > 0) {
	$ip;
	$ip1;
	$ip2;
	$ip3;
	$ip4;
	$ip_for;
// output data of each row
echo"<form action = 'empinfo.php' method = 'post'>" ;
while($row = $result->fetch_assoc()) {
	$ip = "valid".$row['employee_id'];
	$ip1 = "employee_name".$row['employee_id'];
	$ip2 = "employee_salary".$row['employee_id'];
	$ip3 = "working_hours".$row['employee_id'];
	$ip4 = "experience".$row['employee_id'];
	$ip_for = "id".$row["employee_id"];
	//echo "$ip";
	echo "<tr><td><input disabled type='text' id='fname' name='$ip_for' value='" . $row["employee_id"]. "'<br></td>
	<td><input type='text' id='fname' name='$ip1' value='" . $row["employee_name"]. "'></td><td>
	<input type='text' id='fname' name='$ip2' value='" . $row["employee_salary"]. "'></td><td>
	<input type='text' id='fname' name='$ip3' value='" . $row["working_hours"]. "'></td><td>
	<input type='text' id='fname' name='$ip4' value='" . $row["experience"]. "'></td><td>
	<input type='submit' id='fname' name='$ip' value='Edit'></td></tr>";
	if(isset($_POST[$ip])){
		//echo "$ip1";
    $sqlquery = "Update employee set employee_name='".$_POST[$ip1]."',experience='".$_POST[$ip4]."',working_hours='".$_POST[$ip3]."',employee_salary='".$_POST[$ip2]."' where employee_id = '" . $_POST[$ip_for]. "'";
		$row = $conn->query($sqlquery);
		header("Location: /empinfo.php");
	}
}
echo "</table></form>";
} else { echo "0 results"; }
$conn->close();
if(isset($_SESSION['admin'])){
	echo "<form method='post'><input type='submit' id='logout' name='back' value='Back'></form>";
	if(isset($_POST['back'])){
		unset($_SESSION['name']);  
		redirect("maninfo.php");
	}
}
echo "<form method='post'><input type='submit' id='logout' name='logout' value='Logout'></form>";
if(isset($_POST['logout'])){
	session_destroy();
	redirect("manager_login.php");
}
?>

</table>
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
</body>
</html>