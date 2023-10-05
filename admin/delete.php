<?php
include 'config.php';
if(isset($_GET['deleteid'])){
	$V_ID = $_GET['deleteid'];

	$sql="DELETE FROM admin_data WHere V_ID='$V_ID' ";

	$result=mysqli_query($conn,$sql);
	if($result){
		header("location: ../admin/adminMain.php");
	}
	else{
		die(mysqli_error($conn));
	}
}
$conn->close()
?>