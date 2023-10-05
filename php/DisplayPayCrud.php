<?php
  include'config.php';
  ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Payment Page CRUD Operation</title>
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../css/indexstyle.css">
<!-- HEADER -->

<div id="header">
    <img id="logoid"src="../images/logo-image.PNG" alt="Webiste logo" height="110px" width="110px">
    <img id="logonameid" src="../images/logo-name.PNG" alt="Webiste logo Name" height="125px"> </a>

    <img id="user" src="../images/profile-new.PNG" alt="User Login Icon" height="80px" width="120px"></a><a href="#home">

    <a href="../views/index.php"> <input id="login"  class="button1" type="button" name="login" value="Home page"> </a> 
     </div>
<br>
<style type="text/css">
  h1{
    text-align: center;
    color: violet;
    font-size:50px ;
  }
</style>
</head>
<body>
    <br><br><br><br><br><br>
  <h1>Admin Payment Details Panel </h1>


	<div class="container">
		<button class="btn-primary my-5"> <a href="../views/paymentPortal.php" class="text-light">
		Add payment </a> 
		</button>

		<table class="table">
  <thead>
    <tr>
      <th scope="col">ID NO</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">ADDRESS</th>
      <th scope="col">zipcode</th>
      <th scope="col">card_Name</th>
      <th scope="col">card_No</th>
      <th scope="col">expire_month</th>
      <th scope="col">expire_year</th>
      <th scope="col">cvv</th>

    </tr>
  </thead>
  <tbody>

<?php

  $sql="SELECT pay_id, Fullname,email,Useraddress,zipcode,cardname,cardno,expiremonth,expireyear,cvv FROM paymentportal";
  $result=$conn->query($sql);
  if($result){
    while($row=mysqli_fetch_assoc($result)){
      $pay_id=$row['pay_id'];
      $name=$row['Fullname'];
      $email=$row['email'];
      $address=$row['Useraddress'];
      $zipcode=$row['zipcode'];
      $cardname=$row['cardname'];
      $cardno=$row['cardno'];
      $exmonth=$row['expiremonth'];
      $exyear=$row['expireyear'];
      $cvv=$row['cvv'];
      echo '<tr>
      <th scope="row">'.$pay_id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$address.'</td>
      <td>'.$zipcode.'</td>
      <td>'.$cardname.'</td>
      <td>'.$cardno.'</td>
      <td>'.$exmonth.'</td>
      <td>'.$exyear.'</td>
      <td>'.$cvv.'</td>
        <td>
    <button class="btn btn-primary"> <a href="UpdatePay.php?updateid='.$pay_id.'" class="text-light">Update</a></button>
    <button class="btn btn-danger"> <a href="deletepay.php?deleteid='.$pay_id.'"  class="text-light">Delete</a></button>
      </td>
    </tr>';
    }
  }

?>



  </tbody>
</table>

	</div>
</body>
</html>