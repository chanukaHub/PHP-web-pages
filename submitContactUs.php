<!--linked config file-->
<?php
	include_once 'config.php'
?>

<!--php code to insert contact details to database-->
<?php
	
	//Escape user inputs for security
	$fName = $_POST["fname"];
	$number = $_POST["pnumber"];
	$email = $_POST["uemail"];
	$message = $_POST["message"];
	$c= date('d-m-y h:i:s');
	
	
		
	//Attemt insert query execution
	$sql ="INSERT INTO contact(contact_id,name,number,email,message,date)VALUES('','$fName','$number','$email','$message','$c')";
	

	if(mysqli_query($conn,$sql)=== TRUE){
		header("Location:contact_us.php");
		//echo"<script>alert('Records added successfully')</script>";
	}
	else{
		echo"<script>alert('ERROR:Could not able to execute')</script>";
	}
	
	//close connection
	mysqli_close($conn);
	
?>