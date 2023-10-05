<?php
   include 'config.php';
   $V_ID=$_GET['updateid'];
   $sql= "SELECT *FROM admin_data WHERE V_ID='$V_ID'";
   $result= mysqli_query($conn,$sql);
   $row=mysqli_fetch_assoc($result);
   $name=$row['V_Name'];
   $M_date=$row['M_Date'];
   $E_date=$row['E_Date'];
   $stocks =$row['Stocks'];

   if(isset($_POST['submit']))
   {
   	$name =$_POST['name'];
   	$M_date = $_POST['M_date'];
   	$E_date =$_POST['E_date'];
   	$stocks = $_POST['stocks'];

   	$sql="UPDATE admin_data SET V_Name='$name', M_Date='$M_date', E_Date='$E_date', Stocks= '$stocks' WHERE V_ID='$V_ID'"; 
    

   	$result=mysqli_query($conn,$sql);
   	if($result){
   		//echo "Data updateded successfully";
        header('location: ../admin/adminMain.php');
   	}
   	else{
   		die(mysqli_error($conn));
   	}
   }
?>

<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Care Point | Admin Panel  </title>
	<link rel="icon" type="image/x-icon" href="../images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="../css/contact_style.css">

<br>
</head>

<body>
     <h1> WELCOME TO ADMIN ADD DATABASE PANAL  </h1>
	 <div class="form">
	 	
      <form method="post" id="myform">
      	<h1> Vaccination Database </h1>

        <br>
       
        
        <label class="textb">Vaccine Name</label>
        <input  class="texta" type="text" name="name" id = "Name" placeholder="Vaccine Name" value=<?php echo $name;?>>

        <label class="textb">Manufacture Date:</label>
        <input  class="texta" type="date" name="M_date" value=<?php echo $M_date;?> ></input>
     
        <label class="textb">Expiry Date:</label>
        <input class="texta" type="date" name="E_date" value=<?php echo $E_date;?> ></input>
        
        <label class="textb">Available Stocks</label>
         <input class="texta" type="text" id="stock" name="stocks" placeholder="Available stocks" value=<?php echo $stocks;?>  >

        <input id="submit" class="submit" type="submit" value="Update" name = "submit"></br></br>

      </form>
    </div>
    <br>
 
</body>
</html>