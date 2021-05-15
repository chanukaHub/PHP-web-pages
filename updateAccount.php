<?php 

	include_once 'config.php';

?>




<?php 

	if($_POST['submit1'])
	{
		$fname = $_POST["fname"];
		$email = $_POST["email1"];
		$phone = $_POST["phone"];
		$address1 = $_POST["address1"];
		$town = $_POST["address2"];
		$username = $_POST["username"];
		$password = $_POST["password"];
	
		$sql = "UPDATE account 
				SET 
				username = '$username',
				fullname = '$fname',
				phone = '$phone', 
				address1 = '$address1',
				town = '$town'
				password = '$password'
				
				WHERE username = $username ";
		
		if(mysqli_query($con, $sql)) {
			
			header ("Location: myaccount.php");
			
		}
		else{

			echo "<script> alert ('ERROR: could not able to execute the query')</script>";
		
		}
	}
    else if($_POST['submit2'])
	{
		$username = $_POST["username"];
	
		$sql = "DELETE FROM account		
				WHERE username = $username";
	
		if(mysqli_query($con, $sql)) {
			echo "<script> alert ('Account successfully deleted')</script>";
			header ("Location: index.php");
			
		}
		else{

			echo "<script> alert ('ERROR: could not able to execute the query')</script>";
		
		}
	
	}
	
	
	mysqli_close($con);

?>