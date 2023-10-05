
<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Care Point | Contact Us  </title>
	<link rel="icon" type="image/x-icon" href="../images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="../css/contact_style.css">
	<script type="text/javascript" src="../js/contactUs.js"></script>

<?php
require("header.php");
?>


</head>

<body>
    <script>
        document.getElementById("<?php echo $ActivePage ?>").classList.add('active');
    </script>
	 <div class="form">
	 	
        <form method="post" id="myform" action="../php/contactus.php" onsubmit = "return validate();">
      	<h1> Contact us </h1>
        <h2>We are open for any suggestions. If you have questions or just want to get in touch, use the from below. We look forward to hearing from you! </h2>
        <br>
        <div id="error_message">    
        </div>
        <label class="textb">Full name</label>
        <input  class="texta" type="text" name="fullname" id = "fullname" placeholder="Full name">
        
        <label class="textb">Email</label>
        <input  class="texta" type="email" name="email" id = "email" placeholder="Email address">

        <label class="textb">Phone Number</label>
        <input  class="texta" type="tel" name="phone" id = "phone" placeholder="1234567890">

        <label class="textb">Please enter your Message</label>
        <input rows="6" cols="50" class="texta" name="question" id = "question" placeholder="Write your enquiries"></textarea>


        <input id="submit" class="submit" type="submit" value="Submit" name = "submit"></br></br>

        <input id = "reset" class="reset" type="reset" value="Reset">

      </form>
    </div>
        
<?php
require("footer.php");
?>
	
</body>
</html>