<?php
  session_start();
  include "savetable.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Page</title>
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
width: 80%;
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
tr:nth-child(even) input[type=submit]{background-color: #f2f2f2; color : black;}#subbuttn{
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
</head>
<body>
<table>
<tr>
<th>Manager ID</th>
<th>Manager Name</th>
<th>Manager Salary</th>
<th>Working Hours</th>
<th>Experience</th>
<th>Type</th>
<th>Edit</th>
<th>View</th>
</tr>
<?php
include('dbconn.php');
$sql = "select manager_id, manager_name, manager_salary,working_hours,experience, manager_type from manager";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
	$ip;
	$ip1;
	$ip2;
	$ip3;
	$ip4;
    $ip_for;
    $ip_edit;
    $ip_view;
// output data of each row
echo"<form action = 'maninfo.php' method = 'post'>" ;
while($row = $result->fetch_assoc()) {
	$ip = "valid".$row['manager_id'];
	$ip1 = "manager_name".$row['manager_id'];
	$ip2 = "manager_salary".$row['manager_id'];
	$ip3 = "working_hours".$row['manager_id'];
    $ip4 = "experience".$row['manager_id'];
    $ip5 = "type".$row['manager_id'];
    $ip_for = "id".$row["manager_id"];
    $ip_edit = "edit".$row["manager_id"];
    $ip_view = "view".$row["manager_id"];
	echo "<tr><td><input disabled type='text' id='fname' name='$ip_for' value='" . $row["manager_id"]. "'<br></td>
	<td><input type='text' id='fname' name='$ip1' value='" . $row["manager_name"]. "'></td><td>
	<input type='text' id='fname' name='$ip2' value='" . $row["manager_salary"]. "'></td><td>
	<input type='text' id='fname' name='$ip3' value='" . $row["working_hours"]. "'></td><td>
    <input type='text' id='fname' name='$ip4' value='" . $row["experience"]. "'></td><td>
    <input type='text' id='fname' name='$ip5' value='" . $row["manager_type"]. "'></td><td>
    <input type='submit' id='fname' name='$ip_edit' value='Edit'></td><td>
    <input type='submit' id='fname' name='$ip_view' value='View'></td></tr>";
    if(isset($_POST[$ip_edit])){
        //echo "$ip1";
        $sqlquery = "Update manager set manager_name='".$_POST[$ip1]."',experience='".$_POST[$ip4]."',working_hours='".$_POST[$ip3]."',manager_salary='".$_POST[$ip2]."' where manager_id = '" . $ip. "'";
        $row = $conn->query($sqlquery);
        redirect("maninfo.php");
    }
    if(isset($_POST[$ip_view])){
        $_SESSION['user'] = $_POST[$ip_for];
        $_SESSION['id'] = $row['manager_id'];
        redirect("empinfo.php");
    }
    }
    echo "</table></form>";
    } else { echo "0 results"; }

echo "<form method='post'><input type='submit' id='logout' name='logout1' value='Logout'></form>";
if(isset($_POST['logout1'])){
    unset($_SESSION['admin']);
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


