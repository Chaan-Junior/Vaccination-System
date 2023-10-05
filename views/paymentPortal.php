<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Care Point | Payment </title>
	<link rel="icon" type="image/x-icon" href="../images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="../css/aboutUs.css">
	<link rel="stylesheet" type="text/css" href="../css/head_foot_style.css">

	<script src="../js/aboutUs.js"></script>
	


<!-- HEADER -->

	<?php
require("header.php");
?>

</head>
<body>
	<script>
        document.getElementById("<?php echo $ActivePage ?>").classList.add('active');
    </script>
	<form id="container" method="post" action="../php/payment.php">

		<div class="head">
					 	<h1>Payment Portal</h1>
					 </div>
					    <div class="boddy">
					 		<div class="inputbox">
						   <label>Name:</label>
							<input
							 type="text"
							 name="name"
							 placeholder="John wick"
							 id="Name"
							 onkeyup="validateName()">
							 <span id="name-error"></span>
							</div>

							<div class="inputbox">
							<label>Email:</label>
							
							<input 
							type="text" 
							name="email" 
							placeholder="example@mail.com"
							id="Email"
							onkeyup="validateEmail()">
							<span id="email-error"></span>
							</div>


							<div class="inputbox">
							<label>Address:</label>
							<input 
							type="text"
							name="address" 
							placeholder="city-street - area"
							id="Address"
							onkeyup="validateAddress()">
							<span id="address-error"></span>
							</div>


							<div class="inputbox">
							<label>Zip Code:</label>
							<input
							 type="text"
							 name="zipcode"
							 placeholder="102345"
							 id="Zip"
							 onkeyup="validateZip()">

							 <span id="Zip-error"></span>
							</div>



							<div class="inputbox">
							<label>Cards Accepted</label>
							<div class="fuck">
								<img
							  onclick="" src="../images/card_img.png" alt=""
							 >

							</div>
							
							</div>

							<div class="inputbox">
							<label>Name on Card :</label>
						
							<input type="text" name="cardname" placeholder="Mr.John wick">
							</div>

							<div class="inputbox">
								<label>Card Number:</label>
							<input type="number"
							 name="cardno" 
							 placeholder="1023-1111-1111-1111"
							 id="CardNo"
							 onkeyup="validateCardNo()" 
							>
							<span id="Card-error"> </span>
							</div>

							<div class="inputbox">
							<label>Expire Month:</label>
							<input
							 type="text" 
							 name="expiremonth"
							 placeholder="january">
							</div>

							<div class="inputbox">
							<label>Expire Year:</label>
							<input
							 type="number"
							 name="expireyear"
							 placeholder="2022">
							</div>


							<div class="inputbox">
							<label>CVV:</label>
							<input 
							type="text" 
							name="cvv" 
							placeholder="119">
							</div>
						
					
             <br>
			<input name="submit" type="submit" value="Proceed to checkout" class="submit-btn">
			<br><br>
			<button class="submit-btn"><a href="../php/DisplayPayCrud.php">  Payment Details </a></button>
</div>
</form>
<!-- FOOTER -->


<?php
require("footer.php");
?>

</body>
</html>