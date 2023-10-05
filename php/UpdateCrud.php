<?php
    include 'config.php';
    $app_id=$_GET['updateid'];
  $sql="SELECT *FROM appointment WHERE app_id='$app_id'";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($result);        
        $fullname = $row['fullname'];
        $Email = $row['Email'];
        $phoneno = $row['phoneno'];
        $Hospital = $row['Hospital'];
        $Vaccine = $row['Vaccine'];
        $description = $row['description'];
        /*$App_Date = $row['App_Date'];
        $App_Time = $row['App_Time'];*/

    if(isset($_POST['submit']))
    {
    $fullname=$_POST['fullname'];
    $Email=$_POST['Email'];
    $phoneno=$_POST['phoneno'];
    $Hospital=$_POST['Hospital'];
    $Vaccine=$_POST['Vaccine'];
    $description=$_POST['description'];
    /*$App_Date=$_POST['App_Date'];
    $App_Time=$_POST['App_Time'];*/

    $sql="UPDATE appointment SET fullname='$fullname',Email='$Email',phoneno='$phoneno',Hospital='$Hospital',Vaccine='$Vaccine',description='$description' where app_id=$app_id";

           $result=mysqli_query($conn,$sql);

    if($result){
      //echo "Updated Successfully";
      header('location:DisplayCrud.php');

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

    <title>Appointment CRUD Operations </title>
  </head>
  <body>
    <div class="container my-5">
      <form method="post">

  <div class="form-group">
    <label>Full Name</label>
    <input type="text" class="form-control" placeholder="Enter your Name" name="fullname" value=<?php echo $fullname;?>>
  </div>

   <div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control" placeholder="Enter your Email" name="Email" value=<?php echo $Email;?>>
  </div> 

   <div class="form-group">
    <label>Contact Number</label>
    <input type="text" class="form-control" placeholder="Enter your Contact Number" name="phoneno" value=<?php echo $phoneno;?>>
  </div>

  <div class="form-group">
    <label>Hospital</label>
    <input type="text" class="form-control" placeholder="Enter Hospital name" name="Hospital" value=<?php echo $Hospital;?>>
  </div>

 <div class="form-group">
    <label>vaccine</label>
    <input type="text" class="form-control" placeholder="Enter vaccine name" name="Vaccine" value=<?php echo $Vaccine;?>>
  </div>

  <div class="form-group">
    <label>description</label>
    <input type="text" class="form-control" placeholder="Enter descriptin" name="description" value=<?php echo $description;?>>
  </div>

  <!--<div class="form-group">
    <label>Appointment date</label>
    <input type="date" class="form-control" placeholder="Enter appointment date" name="App_Date" value=<?php echo $App_Date;?>>
  </div>

  <div class="form-group">
    <label>Appointment time</label>
    <input type="time" class="form-control" placeholder="Enter appointment time" name="App_Time" value=<?php echo $App_Time;?>>
  </div>-->
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>

  </body>
</html>