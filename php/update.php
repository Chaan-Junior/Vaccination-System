<?php

  include 'config.php';
  $id=$_GET['updateid'];
  $sql="SELECT * FROM user WHERE id=$id";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($result);
  $name=$row['First_name'];
  $address=$row['address'];
  $contact=$row['PhoneNo'];
  $email=$row['Email'];

  if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $address=$_POST['address'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];

    $sql="UPDATE user SET First_name='$name',address='$address',PhoneNo='$contact',Email='$email' where id=$id";

    $result=mysqli_query($conn,$sql);

    if($result){
      //echo "Updated Successfully";
      header('location:display.php');

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
    <input type="text" class="form-control" placeholder="Enter your Name" name="name" value=<?php echo $name;?>>
  </div>

  <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" placeholder="Enter your Address" name="address" value=<?php echo $address;?>>
  </div>

  <div class="form-group">
    <label>Contact Number</label>
    <input type="text" class="form-control" placeholder="Enter your Contact Number" name="contact" value=<?php echo $contact;?>>
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control" placeholder="Enter your Email" name="email" value=<?php echo $email;?>>
  </div> 




  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>

  </body>
</html>