<!--linked config file-->
<?php 

	include_once 'config.php';

?>




<?php 
	//checked which button clicked
	if($_POST['submit1'])
	{
		//get details form form
		$fname = $_POST["fname"];
		$email = $_POST["email1"];
		$phone = $_POST["phone"];
		$address1 = $_POST["address1"];
		$town = $_POST["address2"];
		$username = $_POST["username"];
		$password = $_POST["password"];
	
		//query to update changes
		$sql = "UPDATE account 
				SET 
				username = '$username',
				fullname = '$fname',
				phone = '$phone', 
				address1 = '$address1',
				town = '$town'
				password = '$password'
				
				WHERE username = $username ";
		
		//check connection success or not
		if(mysqli_query($con, $sql)) {
			//redirect to myaccount page
			header ("Location: myaccount.php");
			
		}
		else{
			//dispaly error msg
			echo "<script> alert ('ERROR: could not able to execute the query')</script>";
		
		}
	}
	//checked which button clicked
    else if($_POST['submit2'])
	{
		//get username from form
		$username = $_POST["username"];
	
		//query to delete record
		$sql = "DELETE FROM account		
				WHERE username = $username";
	
		//check connection success or not
		if(mysqli_query($con, $sql)) {
			//dispaly successful msg
			echo "<script> alert ('Account successfully deleted')</script>";
			//redirect to myaccount page
			header ("Location: index.php");
			
		}
		else{
			//dispaly error msg
			echo "<script> alert ('ERROR: could not able to execute the query')</script>";
		
		}
	
	}
	
	//close connection with database
	mysqli_close($con);

?>