<?php
    include "savetable.php";
	// Start Session
	session_start();

	// Get data from the users
	$id = 0;
	$password1 = 0;
	
	
	if (isset($_POST['submit'])) 
	{
	 	$id = $_POST['id'];
	 	$password1 = $_POST["password"];
	 	//$id = stripcslashes($id);  
        //$password1 = stripcslashes($password1);  
		$id = (int)$id;
	


		    if($id=='admin' && $password1=='admin'){
		        $_SESSION['admin'] = 'admin';
		        redirect("maninfo.php");
		    }
	

	$sql = "SELECT * FROM `manager` WHERE `manager_id` = '$id' AND `password` = '$password1'";
	//$sql = "SELECT * FROM manager;";
	$result = $conn -> query($sql);
	if(!$result){
		echo "herein";
		die;
	}

	$row = mysqli_fetch_assoc($result);


	// Print result for debugging
	//print_r($row);


	if (!is_array($row)) 
	{
		// $mess = 'hello';
		$message = 'Invalid Username or Password!';
		echo $message;
	}
	else
	{
        $_SESSION["name"] = $row['manager_name'];
        $_SESSION['id'] = $row['manager_id'];
	}

	if (isset($_SESSION["name"])) 
	{
        //echo "Success";
        if(isset($_SESSION['admin'])){
            unset($_SESSION['admin']);
        }
		redirect("empinfo.php");
	}

}else
{
	echo "Incorrect id or password";
}
?>