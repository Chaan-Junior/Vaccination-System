<?php

	include 'config.php';
	if(isset($_GET['deleteid'])){
		$pay_id=$_GET['deleteid'];

		$sql="delete from paymentportal where pay_id=$pay_id";
		$result=mysqli_query($conn,$sql);

		if($result){
			//echo "Deleted Successfully";
			header('location:displayPayCrud.php');
		}
		else{
			die(mysqli_error($con));
		}
	}

?>