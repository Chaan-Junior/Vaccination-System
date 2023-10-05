<?php

  include 'config.php';
  $pay_id=$_GET['updateid'];
  $sql="SELECT * FROM paymentportal WHERE pay_id='$pay_id'";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($result);

  $name=$row['Fullname'];
  $email=$row['email'];
  $address=$row['Useraddress'];
  $zipcode=$row['zipcode'];
  $cardname=$row['cardname'];
  $cardno=$row['cardno'];
  $exmonth=$row['expiremonth'];
  $exyear=$row['expireyear'];
  $cvv=$row['cvv'];

  if(isset($_POST['submit'])){
    $name=$_POST['Fullname'];
    $email=$_POST['email'];
    $address=$_POST['Useraddress'];
    $zipcode=$_POST['zipcode'];
    $cardname=$_POST['cardname'];
    $cardno=$_POST['cardno'];
    $exmonth=$_POST['expiremonth'];
    $exyear=$_POST['expireyear'];
    $cvv=$_POST['cvv'];

    $sql="UPDATE paymentportal SET Fullname='$name',email='$email',Useraddress='$address',zipcode='$zipcode',cardname='$cardname', cardno='$cardno', expiremonth='$exmonth', expireyear='$exyear', cvv='$cvv' WHERE pay_id=$pay_id";

    $result=mysqli_query($conn,$sql);

    if($result){
      //echo "Updated Successfully";
      header('location:DisplayPayCrud.php');

    }
    else{
      die(mysqli_error($conn));
    }
  }
?>

<!doctype html>
<html lang="en">
  <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>User CRUD Operations </title>
  </head>
  <body>
    <div class="container my-5">
      <form method="post">
        
  <div class="form-group">
    <label>Full Name</label>
    <input type="text" class="form-control" placeholder="Enter your Name" name="Fullname" value=<?php echo $name;?>>
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control" placeholder="Enter your email" name="email" value=<?php echo $email;?>>
  </div>

  <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" placeholder="Enter your Address" name="Useraddress" value=<?php echo $address;?>>
  </div>

  <div class="form-group">
    <label>Zip code</label>
    <input type="text" class="form-control" placeholder="Enter the zip code" name="zipcode" value=<?php echo $zipcode;?>>
  </div>

  <div class="form-group">
    <label>Card name</label>
    <input type="text" class="form-control" placeholder="Enter your card name" name="cardname" value=<?php echo $cardname;?>>
  </div> 

  <div class="form-group">
    <label>Card number</label>
    <input type="text" class="form-control" placeholder="Enter your card number" name="cardno" value=<?php echo $cardno;?>>
  </div>

  <div class="form-group">
    <label>Expire month</label>
    <input type="text" class="form-control" placeholder="Enter your card name" name="expiremonth" value=<?php echo $exmonth;?>>
  </div>

  <div class="form-group">
    <label>Expire year</label>
    <input type="text" class="form-control" placeholder="Enter your card name" name="expireyear" value=<?php echo $exyear;?>>
  </div>

  <div class="form-group">
    <label>Cvv</label>
    <input type="text" class="form-control" placeholder="Enter your card name" name="cvv" value=<?php echo $cvv;?>>
  </div>



  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>

  </body>
</html>