<?php

  include'config.php';
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> CRUD Operation</title>
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
    color: royalblue;
    font-size:50px ;
  }
</style>
</head>
<br>
<body>
  <br><br><br><br>
  <h1>Admin user Panel </h1>

	<div class="container">
		<button class="btn-primary my-5"> <a href="../views/RegistrationFinal.php" class="text-light">
		Add User </a> 
		</button>

		<table class="table">
  <thead>
    <tr>
      <th scope="col">ID NO</th>
      <th scope="col">Name</th>
      <th scope="col">ADDRESS</th>
      <th scope="col">CONTACT</th>
      <th scope="col">Email</th>

    </tr>
  </thead>
  <tbody>

<?php

  $sql="SELECT id, First_name, address, PhoneNo, Email FROM user";
  $result=$conn->query($sql);
  if($result){
    while($row=mysqli_fetch_assoc($result)){
      $id=$row['id'];
      $name=$row['First_name'];
      $address=$row['address'];
      $contact=$row['PhoneNo'];
      $email=$row['Email'];
      echo '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$address.'</td>
      <td>'.$contact.'</td>
      <td>'.$email.'</td>
        <td>
    <button class="btn btn-primary"> <a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
    <button class="btn btn-danger"> <a href="delete.php?deleteid='.$id.'"  class="text-light">Delete</a></button>
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