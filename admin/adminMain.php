<?php
session_start();
include 'config.php';
?>

<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Care Point | Admin Main Panel  </title>
	<link rel="icon" type="image/x-icon" href="../images/favicon.ico">
    <style>
    	table,th,td{
    		border:  1px solid black;
    	}
    	table{
    		width: 70%;
    	}
    	th,td{
    		padding: 15px;
    		text-align: left;
    	}
    	tr:nth-child(even){
    		background-color:#ecf9ec;
    	}
    	.btn{
    		color: white;
    		background-color: #ddccff;
    		padding: 10px 25px;
    		text-align: center;
    		font-size: 16px;
    		margin: 4px 2px;
    		cursor: pointer;
    	}
    	div.header{
    		font-family: poppins;
    		display: flex;
    		justify-content: space-between;
    		align-items: center;
    		padding: 0px 60px;
    		background-color: #006699;
    	}
    	div.header button{
    		background-color: #f0f0f0;
    		font-size: 16px;
    		font-weight: 550;
    		padding: 8px 12px;
    		border: 2px solid black;
    		border-radius: 5px;
    	}
    	body{
    		background-color: #ccddff;
    	}
    </style>
<br>
</head>

<body>
	<div class="header">
	 <h1> WELCOME TO ADMIN DATABASE PANAL  </h1>
	 <form method="POST">
	 <button> <a href="../views/index.php">  Logout </a></button>
	 </form>
	 </div>
	 <br>
	<button class="btn"><a href="AdminPage.php">  ADD Vaccine Details </a></button>
	<br><br>
 
 <table>
 	<tr>
       <th scope="col"> V_ID </th>
       <th scope="col"> V_Name </th>
       <th scope="col"> M_Date </th>
       <th scope="col"> E_Date </th>
       <th scope="col"> Stocks </th>
       <th scope="col"> Operations </th>
 	</tr>
	
			<?php
			$sql = "SELECT V_ID, V_Name, M_Date, E_Date, Stocks FROM admin_data";
			$result = $conn->query($sql);

			if($result){
				while ($row = mysqli_fetch_assoc($result)){
					$V_ID = $row['V_ID'];
				    $V_Name = $row['V_Name'];
				    $M_Date = $row['M_Date'];
				    $E_Date = $row['E_Date'];
				    $Stocks = $row['Stocks'];
			        echo '<tr>
			        <th scope="row">'.$V_ID.'</th>
			        <td>'.$V_Name.'</td>
			        <td>'.$M_Date.'</td>
			        <td>'.$E_Date.'</td>
			        <td>'.$Stocks.'</td>
			        <td>
			        <button class="btn"> <a href="../admin/updateAdmin.php?updateid='.$V_ID.'"> Update </a></button>
			        <button class="btn"> <a href="../admin/delete.php?deleteid='.$V_ID.'"> Delete </a></button>
			        </td>
			        </tr>';
				}
			}

		
			$conn->close();
			?>
</table>

</body>
</html>