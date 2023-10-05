<?php
include 'config.php';
if(isset($_GET['deleteid'])){
  $app_id = $_GET['deleteid'];

  $sql="DELETE FROM appointment WHere app_id='$app_id' ";

  $result=mysqli_query($conn,$sql);
  if($result){
    header("location: ../php/DisplayCrud.php");
  }
  else{
    die(mysqli_error($conn));
  }
}
$conn->close()
?>
