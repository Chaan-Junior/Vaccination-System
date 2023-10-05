
<?php
   include 'config.php';
   if(isset($_POST['submit']))
   {
   	$v_id =$_POST['v_id'];
   	$name =$_POST['name'];
   	$M_date = $_POST['M_date'];
   	$E_date =$_POST['E_date'];
   	$stocks = $_POST['stocks'];

   	$sql=" INSERT INTO admin_data(V_ID,V_Name,M_Date,E_Date,Stocks) values('$v_id','$name','$M_date','$E_date','$stocks')"; 

   	$result=mysqli_query($conn,$sql);
   	if($result){
   		//echo "Data inserted successfully";
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
    
	 <div class="form">
	 	
      <form method="post" id="myform">
      	<h1> Vaccination Database </h1>

        <br>
 
        <label class="textb">Vaccine Name</label>
        <input  class="texta" type="text" name="name" id = "Name" placeholder="Vaccine Name">

        <label class="textb">Manufacture Date:</label>
        <input  class="texta" type="date" name="M_date" value="" ></input>
     
        <label class="textb">Expiry Date:</label>
        <input class="texta" type="date" name="E_date" value="" ></input>
        
        <label class="textb">Available Stocks</label>
         <input class="texta" type="text" id="stock" name="stocks" placeholder="Available stocks" >

        <input id="submit" class="submit" type="submit" value="Submit" name = "submit"></br></br>

      </form>
    </div>
    <br>
 
</body>
</html>